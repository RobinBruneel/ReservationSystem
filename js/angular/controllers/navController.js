'use strict';

app.controller('navController', function ($scope) {
    $scope.wantToLogIn = true;
    $scope.loggedIn = true;

    $scope.toggleLogIn = function (id) {
        $scope.wantToLogIn = !$scope.wantToLogIn;

        if (document.getElementById(id)) {
            if ($scope.wantToLogIn) {
                document.getElementById(id).style.display = 'inline';
               // document.getElementById(id).style.height = '250px';
            }
            else {
                document.getElementById(id).style.display = 'none';
            }
        }
    };
});