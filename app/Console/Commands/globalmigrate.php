<?php

namespace App\Console\Commands;

use App\Location;
use Excel;
use Illuminate\Console\Command;

class globalmigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'global:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate records from csv to database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $this->info("Fetching the Location Excel...");

        Excel::load(storage_path() . '/excel/location.xls', function ($reader) {

            $reader->ignoreEmpty();
            $reader->setSeparator(',');
            $datas = $reader->toArray();

            $i = 0;
            $stateArray =array();
            $this->line("Creating City : ");
            $bar = $this->output->createProgressBar(count($datas));
            foreach ($datas as $data) {
                if (isset($data['city']) && isset($data['state']) && isset($data['type']) && isset($data['population'])) {

                    $loc = new Location();
                    $loc->location_short_name = strtoupper($data['city']);
                    $loc->location_big_name = $data['city'];
                    $loc->location_description = $data['city'] . " Which is in State " . $data['state'] . " and of Type " . $data['type'] . " With Population " . $data['population'];
                    $loc->location_type = 'City';

                    $loc->save();
                    $i++;
                    $bar->advance();
                    array_push($stateArray,$data['state']);
                }
            }
            $bar->finish();
            $this->info("    ==> ".$i . " Records inserted...");

            $this->line("Creating State : ");

            $j = 0;

            $newState = array_unique($stateArray);
            $state_bar = $this->output->createProgressBar(count($newState));
            foreach($newState as $state) {

                $loc = new Location();
                $loc->location_short_name = strtoupper($state);
                $loc->location_big_name = $state;
                $loc->location_description = $state . " is In India";
                $loc->location_type = 'State';
                $loc->save();

                $j++;
                $state_bar->advance();
            }

            $state_bar->finish();
            $this->info("    ==> ".$j . " Records inserted...");

        });
    }
}
