<!DOCTYPE html>
<html lang="es" ng-app="MyApp">
    <head>
        <meta charset="UTF-8">
        <title>ng-repear</title>
        <link rel="stylesheet" href="../bower_components/angular/angular-csp.css">
    </head>
    <body ng-controller="MyController">
        <header>Curso angular</header>
        <input type="text" ng-model="nuevoComentario.nombre" placeholder="Escribe tu nombre"><br>
        <textarea placeholder="Escribe aqui tus comentarios" ng-model="nuevoComentario.texto"></textarea>
        
        
        
        <button ng-click="agregarComentario()">Agregar Comentario</button>
        <hr>
        <h2>Comentario</h2>
        <ul>
            <li ng-repeat="comentario in comentarios">Nombre: {{comentario.nombre}} | Comentario: {{comentario.texto}}</li>
        </ul>
        
        <script src="../bower_components/angular/angular.js"></script>
        <script src="controller.js"></script>
    </body>
</html>
