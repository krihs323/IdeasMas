var app = angular.module("myapp",[]);

 app.controller("ideacontroller", function($scope, $http){

     $scope.btnName = "ADD";

     $scope.insertData = function(){

           if($scope.tituloIdea == null)
           {
               alert("El titulo de la idea es requerido");
               return;
           }

         if($scope.areainteresIdea == null)
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
                        'areainteresIdea':$scope.areainteresIdea,
                        'descripcionIdea':$scope.descripcionIdea.trim(),
                        'privadoIdea':$scope.privadoIdea,
                        'btnName':$scope.btnName
                     }
                ).success(function(data){
                     alert(data);

                     $scope.tituloIdea = null;
                     $scope.areainteresIdea = null;
                     $scope.descripcionIdea = null;
                     $scope.privadoIdea = null;
                     $scope.btnName = null;

                     $scope.btnName = "ADD";
                });
      }

      $scope.displayData = function(){
           $http.get("../model/crud_idea.php")
           .success(function(data){
                $scope.areas = data;
           });

          $scope.estadosprivados = ['Público','Privado'];
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