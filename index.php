<!DOCTYPE HTML>
<?php
//Step1
$db = mysqli_connect('localhost', 'root', 'root', 'reservationsystem')
        or die('Error connecting to MySQL server.');
?>
<html>
    <head>
        <title>Bruneel Robin</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-reservation.css" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body class="homepage" ng-app="robinApp"  flow-init
          flow-file-added="!!{png:1,gif:1,jpg:1,jpeg:1}[$file.getExtension()]"
          flow-files-submitted="$flow.upload()">

        <div ng-include="'js/angular/templates/header.html'"></div>
        <div ng-view=""></div>
        <div ng-include="'js/angular/templates/footer.html'"></div>

        <!---------------------Script section------------------------>
        <script src="js/site/jquery.min.js"></script>
        <script src="js/site/jquery.dropotron.min.js"></script>
        <script src="js/site/skel.min.js"></script>
        <script src="js/site/skel-layers.min.js"></script>
        <script src="js/site/init.js"></script>

        <!--Angular stuff-->
        <!--Imports--> 
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-animate.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-cookies.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-resource.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-route.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-sanitize.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-scenario.js"></script>
        <script type='text/javascript'  src="js/angular/imports/angular-touch.js"></script>
        <script type='text/javascript'  src="js/angular/imports/ng-flow-2.5.1/dist/ng-flow-standalone.js"></script>
        <script type='text/javascript'  src="js/angular/app.js"></script>

        <!--Controllers-->
        <script src="js/angular/controllers/homeController.js"></script>
        <script src="js/angular/controllers/aboutController.js"></script>
        <script src="js/angular/controllers/contactController.js"></script>
        <script src="js/angular/controllers/navController.js"></script>        
        <script src="js/angular/controllers/reservationController.js"></script>

   
    </body>
</html>