var app = angular.module("MyApp",[]);
app.controller("MyController",["$scope",function(s){
    s.nuevoComentario={};
    s.comentarios= [{
        nombre:"Neto", 
        texto:"nada"
    }];
    
    s.agregarComentario = function(){
      s.comentarios.push(s.nuevoComentario);
      s.limpiarCampos();
    };
    
    s.limpiarCampos = function(){
        s.nuevoComentario={};
    };
}]);
