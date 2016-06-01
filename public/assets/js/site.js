/**
 * Created by root on 1/6/16.
 */
var app = angular.module('globalapp', ['ngMaterial'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

app.config(function ($mdThemingProvider) {
    $mdThemingProvider.theme('default')
        .primaryPalette('blue')
        .accentPalette('red');
});
app.controller('maincontroller', function ($scope) {

})
app.controller('logincontroller', function ($scope, $http, $window) {

    $scope.login = function () {

        $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $http({
            method: 'POST',
            url: '/login',
            data: $.param({
                username: $scope.username,
                password: $scope.password,
                remember: $scope.remember == true ? 1 : 0
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (data, status, headers, config) {
            if (data.status) {
                $window.location.href = '/dashboard'
            }
        }).error(function (data, status, headers, config) {
        });
    }
})
$(document).ready(function () {
    var stickyOffset = $('.sticky').offset().top;

    $(window).scroll(function () {
        var sticky = $('.sticky'),
            scroll = $(window).scrollTop();

        if (scroll >= stickyOffset) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
})