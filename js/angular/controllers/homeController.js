'use strict';

app.controller('homeController', function ($scope) {
    $scope.siteTitle = 'Bruneel Robin';

    $scope.friends = [
        {
            id: 1,
            firstname: 'Lana',
            lastName: 'Magerman',
            gebdate: '16-04-1996',
            karakteristieken: [
                {id: 1, text: 'Lief'},
                {id: 2, text: 'Mooi'},
                {id: 3, text: 'Kipje'}
            ]
        },
        {
            id: 2,
            firstname: 'Robin',
            lastName: 'Bruneel',
            gebdate: '18-08-1993',
            karakteristieken: [
                {id: 1, text: 'Zot van Lana'},
                {id: 2, text: 'Sportief'},
                {id: 3, text: 'Programmeur'}
            ]
        }
    ];
});