
<!DOCTYPE html>
<html ng-app="login" lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <link rel="stylesheet" href="../css/estilos.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
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
          margin-top:150px;
        }
        .ideasplusTitle span:nth-child(1){
            color: #3352FF;
        }   .ideasplusTitle span:nth-child(2){
            color: white;
        }
           .ideasplusTitle span{
            font-size: 110px;
            font-family: 'Open Sans';
               width: 100%;
        }
        .centerAlert{
            margin: 0 auto;
        }
        .ideasplusTitle p{
            color: white;
            font-size: 16px;
            font-family: 'Open Sans';
        }
    
}

        </style>
        <div class="ideasplusTitle">
             <span>IDEAS ++</span>
        </div>
        
        
    <div class="container loginInterno" ng-controller="controllerForm">
     <br>
        
         <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                 
                  <div class="panel-body">
                    <form  ng-submit="entrar()">
                        <fieldset>
                            <div class="form-group">
                              <input class="form-control" ng-model="txtUsuario" placeholder="Usuario" name="email" type="text" required>
                          </div>
                          <div class="form-group">
                              <input class="form-control" ng-model="txtContrasena" placeholder="Contraseña" name="password" type="password" value=""required>
                          </div>
                       
                          <div class="row">
                           <div class="col-md-6">
                            <input class="btn btn-lg btn-info btn-block" type="submit" value="Entrar">
                           </div>
                           <div class="col-md-6">
                              <input class="btn btn-lg btndefault btn-block" ng-click="limpiar()" type="reset" value="Borrar">
                           </div>
                          </div>
                          
                          <div>
                              ¿No tienes usuario? haz click <a href="./UsuarioRegistro.php">aquí</a>
                          </div>
                        </fieldset>
                     </form>
                  </div>
              </div> 
            </div>
          </div> 

        <div class="alert alert-warning alert-dismissible fade in centerAlert" role="alert" ng-hide="alertaLoginError">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong>Lo siento!</strong> Tu Usuario o Contraseña estan incorrectos.
        </div>

        <div class="alert alert-success alert-dismissible fade in" role="alert" ng-hide="alertaLoginCorrecto">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      
          <strong>Bienvenido!</strong> {{rsJSON | json}}.
        </div>
    </div>
    
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <script src="../controller/app.js"></script>
    </body>
</html>