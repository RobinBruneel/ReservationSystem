'use strict';

app.controller('aboutController', function ($scope) {

    $scope.title = "Over deze site";
    $scope.byline = "Deze site werd opgebouwd met verschillende webtechnologien. JQuery en PHP leerde ik op eigen kracht, de andere talen en frameworks kwamen in mijn studie aan bod.";

    $scope.usages = [
        {
            id: 1,
            name: "Html",
            description: "",
            site: "",
            image: "icon_html5.png"
        },
        {
            id: 2,
            name: "Css",
            description: "",
            site: "",
            image: "icon_css3.png"
        },
        {
            id: 3,
            name: "PHP",
            description: "",
            site: "",
            image: "icon_php.png"
        },
        {
            id: 4,
            name: "AngularJS",
            description: "",
            site: "",
            image: "icon_angular.png"
        },
        {
            id: 5,
            name: "JQuery",
            description: "",
            site: "",
            image: "icon_jquery.png"
        }
    ];
});