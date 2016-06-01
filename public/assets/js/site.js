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
app.filter('keyboardShortcut', function($window) {
    return function(str) {
        if (!str) return;
        var keys = str.split('-');
        var isOSX = /Mac OS X/.test($window.navigator.userAgent);
        var seperator = (!isOSX || keys.length > 2) ? '+' : '';
        var abbreviations = {
            M: isOSX ? '⌘' : 'Ctrl',
            A: isOSX ? 'Option' : 'Alt',
            S: 'Shift'
        };
        return keys.map(function(key, index) {
            var last = index == keys.length - 1;
            return last ? key : abbreviations[key];
        }).join(seperator);
    };
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