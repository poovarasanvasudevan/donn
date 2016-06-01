@extends('component.layout')

@section('toolbar')
    @include('component.toolbar')
@endsection
@section('body')


    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <center>
        <div ng-controller="logincontroller"
             class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet  mdl-cell--4-col-phone mdl-cell--4-col-desktop mdl-card mdl-shadow--2dp">

            <div style="margin-top: 30px;" class="md-padding">

                <md-input-container md-no-float class="md-block">
                    <md-icon class="zmdi zmdi-account zmdi-hc-lg"></md-icon>
                    <input ng-model="username" type="text" placeholder="Abhyasi Id">
                </md-input-container>
                <md-input-container md-no-float class="md-block">
                    <md-icon class="zmdi zmdi-eye zmdi-hc-lg"></md-icon>
                    <input ng-model="password" type="password" placeholder="Password">
                </md-input-container>
                <div class="">
                    <span class="md-margin pull-left">
                    <md-checkbox ng-model="remember">Remember Me</md-checkbox>
                    </span>
                    <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored pull-right mdl-js-ripple-effect"
                            ng-click="login()"
                            id="loginbtn">
                        Login
                    </button>
                </div>
            </div>


            <div class="mdl-menu__item--full-bleed-divider"></div>

            <div class="md-padding">
                <center><h6>OR</h6></center>

                <md-button class="md-raised md-warn"><i class="zmdi zmdi-account zmdi-hc-lg"></i>&nbsp;&nbsp;Login with
                    My SRCM
                </md-button>
            </div>

        </div>

        <div class="mdl-dialog" ng-hide="true">
            <div class="mdl-dialog__content">
                <center>
                    <div class="mdl-spinner mdl-js-spinner is-active"></div>
                    <h5>Loading...</h5>
                </center>
            </div>
        </div>
    </center>
@endsection