var app = angular.module("myapp",[]);
var areaId;
  var usuarioID;
$(document).ready(function(){
usuarioID= $('#userCrea').val(); 
   
});


 app.controller("ideacontroller", function($scope, $http){

     $scope.btnName = "Publicar";

     $scope.insertData = function(){
       
           if($scope.tituloIdea == null)
           {
               alert("El titulo de la idea es requerido");
               return;
           }

         if(areaId == null)
           {
               alert("debe elegir un area de interes");
               return;
           }

         if($scope.descripcionIdea.trim() == null || $scope.descripcionIdea.trim() == '')
           {
               alert("La descripcion es requerida");
               return;
           }

         $http.post(
                     "../model/crud_idea.php",
                     {
                       
                        'tituloIdea':$scope.tituloIdea,
                        'areainteresIdea':areaId,
                        'descripcionIdea':$scope.descripcionIdea.trim(),
                        'privadoIdea':$scope.privadoIdea,
                         'idUsuarioCrea':usuarioID,
                        'btnName':$scope.btnName
                     }
                ).success(function(data){
                     alert(data);

                     $scope.tituloIdea = null;
                     $scope.areainteresIdea = null;
                     $scope.descripcionIdea = null;
                     $scope.privadoIdea = null;
                     $scope.btnName = null;

                     $scope.btnName = "Publicar";
                $scope.displayIdea();  
                });
      }

      $scope.displayData = function(){
           $http.get("../model/crud_idea.php")
           .success(function(data){
                $scope.areas = data;
           });

                                                        
      }
      
          $scope.displayIdea = function(){
           $http.get("../model/crud_publicaciones.php")
           .success(function(data){
                $scope.ideas = data;
           });

                                                        
      }
      
  
    $scope.mostrar = function(id, nombreRol){  
       areaId=id;
    
      } 
       

      /*$scope.updateData = function(id, nombreRol){  s
           $scope.id = id;
           $scope.nombreRol = nombreRol;

           $scope.btnName = "Update";
      } */
       /*$scope.deleteData = function(id){
           //$scope.btnName = "deleteData";
           $http.post("../model/crud_rol.php", {'id':id , 'btnName':"deleteData"}).success(function(data){
             alert(data);
               //$scope.btnName = "ADD";
               $scope.displayData();
           });
      } */
 });