<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Hola Mundo</title>
        <link rel="stylesheet" href="../bower_components/angular/angular-csp.css">
    </head>
    <body ng-app="MyApp">
        <header>Curso angular</header>
        <h1 ng-controller="MyController" ng-model="nombre">{{"Hola: "+nombre}}</h1>
        
        <script src="../bower_components/angular/angular.js"></script>
        <script src="controller.js"></script>
    </body>
</html>