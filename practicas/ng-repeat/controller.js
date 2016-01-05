var app = angular.module("MyApp",[]);
app.controller("MyController",function($scope){
    $scope.nuevoComentario={};
    $scope.comentarios= [{
        nombre:"Neto", 
        texto:"nada"
    }];
    
    $scope.agregarComentario = function(){
      $scope.comentarios.push($scope.nuevoComentario);
      $scope.limpiarCampos();
    };
    
    $scope.limpiarCampos = function(){
        $scope.nuevoComentario={};
    }
});
