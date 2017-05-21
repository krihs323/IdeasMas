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
           <h2 algin="center"> Registrarse </h2>
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()" required>  
                     <label>Nombre</label>  
                     <input type="text" name="nombreUsuario" ng-model="nombreUsuario" class="form-control" />  
                     <label>Apellido</label> 
                     <input type="text" name="apellidoUsuario" ng-model="apellidoUsuario" class="form-control" />  
                     <label>Documento</label> 
                     <input type="text" name="documentoUsuario" ng-model="documentoUsuario" class="form-control" required/>  
                     <label>Tipo de Documento</label> 
                     <input type="text" name="tipoDocumentoUsuario" ng-model="tipoDocumentoUsuario" class="form-control" required/>  
                     <label>Qu&eacute; eres?</label> 
                     <!--<input type="text" name="idRolUsuario" ng-model="idRolUsuario" class="form-control" />-->
                     <select name="idRolUsuario" ng-model="idRolUsuario" class="form-control">
                      <option value="" selected>Seleccionar</option>
                      <option value="11">Profesor</option> 
                      <option value="12">Estudiante</option>
                     </select>
                     <label>Sexo</label>  
                     <select name="generoUsuario" ng-model="generoUsuario" class="form-control">
                      <option value="" selected>Seleccionar</option>
                      <option value="F">Mujer</option> 
                      <option value="M">Hombre</option>
                     </select>
                     <label>Fecha de Nacimiento</label> 
                     <input type="date" name="fechaNacimientoUsuario" ng-model="fechaNacimientoUsuario" class="form-control" />  
                     <label>Teléfono</label> 
                     <input type="text" name="telefonoUsuario" ng-model="telefonoUsuario" class="form-control" />  
                     <label>Celular</label> 
                     <input type="text" name="celularUsuario" ng-model="celularUsuario" class="form-control" />  
                     <label>Correo</label> 
                     <input type="email" name="correoUsuario" ng-model="correoUsuario" class="form-control" />  
                     <label>Contraseña</label> 
                     <input type="password" name="contrasenaUsuario" ng-model="contrasenaUsuario" class="form-control" />
                     <br />  
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                </div>  
           </div>  
      </body>  
 </html>  