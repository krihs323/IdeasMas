<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="../css/estilos.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_usuario.js"></script>
           <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
      </head>  
      <body>  
        <div class="ideasplusTitle">
            <span>Administrar ideas</span>
        </div>
           <div class="container" >  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
           
                       
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Nombre</th>  
                               <th>Apellido</th>
                               <th>Docunento</th>
                               <th>Tipo de Documento</th>
                               <th>Correo</th>
                               <th>Rol</th>
                               <th>Genero</th>
                               <th>Fecha de Nacimiento</th>
                               <th>Teléfono</th>
                               <th>Celular</th>
                              <th>Activar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                              <td>{{x.NOMBRE}}</td>
                              <td>{{x.APELLIDO}}</td>
                              <td>{{x.DOCUMENTO}}</td>
                              <td>{{x.TIPO_DOCUMENTO}}</td>
                              <td>{{x.CORREO}}</td>
                              <td>{{x.ID_ROL}}</td>
                              <td>{{x.GENERO}}</td>
                              <td>{{x.FECHA_NACIMIENTO}}</td>
                              <td>{{x.TELEFONO}}</td>
                              <td>{{x.CELULAR}}</td>
                               <td><button ng-click="inactivateData(x.ID_USUARIO)" class="btn btn-info btn-xs">Activar</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  