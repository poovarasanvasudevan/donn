@include('component.header')
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" ng-controller="maincontroller">
    @yield('toolbar')
    <main class="mdl-layout__content">
        <div class="page-content">
            @yield('body')
        </div>
    </main>
</div>

@include('component.footer')