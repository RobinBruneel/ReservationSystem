'use strict';

app.controller('portfolioController', function ($scope) {

    $scope.projects = [
        {
            id: 1,
            name: "Mobile app for Joetz",
            type: "p",
            competences: [
                {id: 1, text: 'iOS'},
                {id: 2, text: 'Android'},
                {id: 3, text: 'Laravel'}
            ],
            team: [
                {id: 1, text: 'Bruneel Robin'},
                {id: 1, text: 'Berlez Cédric'},
                {id: 2, text: 'Decuyper Xavier'},
                {id: 3, text: 'Degrande Maikel'}
            ]
        },
        {
            id: 2,
            name: "Planning application for thesis",
            type: "p",
            competences: [
                {id: 1, text: 'Java (Spring)'},
                {id: 2, text: 'Java (Swing)'},
                {id: 3, text: 'Asp.net'},
                {id: 4, text: 'C#'}
            ],
            team: [
                {id: 1, text: 'Bruneel Robin'},
                {id: 1, text: 'Devestel Hendrik'},
                {id: 2, text: 'Delannoy Jens'},
                {id: 3, text: 'Wilko Dries'}
            ]
        }
    ];
});