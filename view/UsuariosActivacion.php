<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_usuario.js"></script>
           
           <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">

     
      <style>

          body{
              width: 100%;
              height: 870px;
              background:url(../recursos/ideas.jpg);
              background-repeat: no-repeat;
              background-size: cover;
          }

          .row{
              margin: 20px 0px 20px 0px;
          }
          .ideasplusTitle{
              width: 100%;
              text-align: center;
            margin-top:20px;
          }
          .ideasplusTitle span:nth-child(1){
              color: white;
          }   .ideasplusTitle span:nth-child(2){
              color: white;
          }
             .ideasplusTitle span{
              font-size: 80px;
              font-family: 'Open Sans';
                 width: 100%;
          }
          .centerAlert{
              margin: 0 auto;
          }
          .ideasplusTitle p{
              color: white;
              font-size: 14px;
              font-family: 'Open Sans';
          }
          label{
              color: white;
              font-size: 14px;
              
          }

        </style>
     
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
           <h2 algin="center"> Activar Usuarios </h2>
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                    
                     <!--
                     <label>Nombre Usuario</label>  
                     <input type="text" name="nombreUsuario" ng-model="nombreUsuario" class="form-control" />  
                     <br />  
                     -->
                      <!--
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br /> 
                     -->
                       
                     <table class="table table-bordered" style="background:white;">  
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