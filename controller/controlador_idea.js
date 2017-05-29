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
           $http.get("../model/crud_idea.php?data=0")
           .success(function(data){
                $scope.areas = data;
           });

          $scope.estadosprivados = ['Público','Privado'];
      }
      
      /*
      * Funcion para realizar el listado de datos
      */
      
      $scope.displayData = function(){  
           $http.get("../model/crud_idea.php?data=0")  
           .success(function(data){  
                $scope.names = data;  
           });  
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

/*
  $scope.provincias=[
    {
      idProvincia:2,
      nombre:"Castellón"
    },
    {
      idProvincia:3,
      nombre:"Alicante"
    },
    {
      idProvincia:1,
      nombre:"Valencia"
    },
    {
      idProvincia:7,
      nombre:"Teruel"
    },  
    {
      idProvincia:5,
      nombre:"Tarragona"
    }
  ];
     
  $scope.miProvinciaSeleccionada=null*/
 
 
  $scope.miProvinciaSeleccionada = function(){  
           $http.get("../model/crud_idea.php?data=1")  
           .success(function(data){  
               // $scope.names = data;  
               alert(data);
           });  
      }



 });