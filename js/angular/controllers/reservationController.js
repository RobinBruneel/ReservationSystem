'use strict';

app.controller('reservationController', function ($scope, $http) {
    $scope.siteTitle = 'Bruneel Robin';

    $scope.getMaxAppointmentsInWeek = function () {
        return $scope.bookings_thirsday.length;
    };

    $scope.getMaxReservationCount = function () {
        return new Array($scope.getMaxAppointmentsInWeek());
    };

    $scope.getFullDockterName = function (firstname, lastname) {
        /*
         console.debug(firstname + " " + lastname);
        console.debug((firstname === "" && lastname === ""));
        console.debug((isNaN(firstname) && isNaN(lastname)));
        console.debug((firstname === "undefined" || firstname === "undefined"));
         */


        if ((firstname === "" && lastname === "") ||
                !(isNaN(firstname) && isNaN(lastname)) ||
                (firstname === "undefined" || firstname === "undefined")) {
            return "";
        }

        return "Dr. " + capitalizeFirstLetter(firstname)
                + " "
                + capitalizeFirstLetter(lastname);
        ;
    };

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    };

    $scope.reservations = function() {
        
       return $http.get('js/angular/services/connection.php').success(function (data) {
            for (var i = 0; i < data.length; i++) {
                console.debug(data);
            }
            return data;
        });
         
    };
   

    $scope.bookings_monday = [
        {
            id: 1,
            date: '16-04-1996',
            hour: '08:30',
            dokter:
                    {
                        id: 1,
                        firstname: 'Lana',
                        lastname: "magerman"
                    }
        }
    ];

    $scope.bookings_thirsday = [
        {
            id: 2,
            date: '17-04-1996',
            hour: '08:30',
            dokter:
                    {
                        id: 1,
                        firstname: 'Robin',
                        lastname: "Bruneel"
                    }
        },
        {
            id: 3,
            date: '17-04-1996',
            hour: '09:30',
            dokter:
                    {
                        id: 1,
                        firstname: 'Robin',
                        lastname: "Bruneel"
                    }
        }
    ];

});