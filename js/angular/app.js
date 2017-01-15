'use strict';

var app = angular.module('robinApp', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngRoute',
    'flow'
]);

    
 //<tr ng-repeat="$index in [] | range:{{count}}">
 app.filter('range', function() {
  return function(input, total) {
    total = parseInt(total);
    for (var i=0; i<total; i++) {
      input.push(i);
    }
    return input;
  };
 });
  
app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {
                templateUrl: 'js/angular/views/home.html',
                controller: 'homeController'
            })
            .when('/about.html', {
                templateUrl: 'js/angular/views/about.html',
                controller: 'aboutController'
            })
            .when('/contact.php', {
                templateUrl: 'js/angular/views/contact.php',
                controller: 'contactController'
            })
            .when('/portfolio.html', {
                templateUrl: 'js/angular/views/portfolio.html',
                controller: 'portfolioController'
            })
              .when('/reservation.html', {
                templateUrl: 'js/angular/views/reservation.html',
                controller: 'reservationController'
            })
            .otherwise({
                redirectTo: '/'
            });
});
