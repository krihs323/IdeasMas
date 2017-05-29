<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" href="../css/estilos.css" />   
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_idea.js"></script>
           <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
      </head>  
      <body>  
           <div class="ideasplusTitle">
            <span>Mis Ideas</span>
        </div>
           <div class="container">  
                <div ng-app="myapp" ng-controller="ideacontroller" ng-init="displayData()">  
                    
                     <!--
                     <label>Nombre Usuario</label>  
                     <input type="text" name="nombreUsuario" ng-model="nombreUsuario" class="form-control" />  
                     <br />  
                     -->
                     
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" onclick="location.href ='./Idea.php';" value="{{btnName}}"/>  
                     <br /><br />' 
                     <table class="table table-bordered">  
                          <tr>
                               <th>Titulo</th>  
                                <th>Descripción</th>  
                                <th>Área</th>  
                                <th>Docente</th>  
                                <th>Fecha de Publicación</th>  
                               <th>Eliminar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.TITULO}}</td>  
                               <td>{{x.DESCRIPCION}}</td>  
                               <td>{{x.ID_AREA}}</td>  
                               <td>{{x.ID_DOCENTE}}</td>  
                               <td>{{x.FECHA_PUBLICACION}}</td>  
                               <td>
                               <!--
                               <button ng-click="updateData(x.ID_IDEA, x.TITULO)" class="btn btn-info btn-xs">Actualizar</button>-->
                               <button ng-click="deleteData(x.ID_IDEA)" class="btn btn-info btn-xs">Eliminar</button></td>  
                          </tr>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  