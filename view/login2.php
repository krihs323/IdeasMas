<!DOCTYPE html>
<html ng-app="login" >
<head>
  <meta charset="UTF-8">
  <title>IDEAS+</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <hgroup>
  <h1>IDEAS+</h1>
  <h3>Por SCRUM TEAM</h3>
</hgroup>
<form ng-controller="controllerForm" ng-submit="entrar()">
  <div class="group">
    <input type="email" ng-model="txtUsuario" name="email"><span class="highlight" ></span><span class="bar"></span>
    <label>E-mail</label>
  </div>
  <div class="group">
    <input type="password" ng-model="txtContrasena" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>

  <button type="submit"  value="Entrar" class="button buttonBlue">Entrar
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
    <div class="alert alert-warning alert-dismissible fade in centerAlert" role="alert" ng-hide="alertaLoginError">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong>Lo siento!</strong> Tu Usuario o Contraseña estan incorrectos.
        </div>

        <div class="alert alert-success alert-dismissible fade in" role="alert" ng-hide="alertaLoginCorrecto">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      
          <strong>Bienvenido!</strong> {{rsJSON | json}}.
        </div>
        
        <div>
               ¿No tienes usuario? haz click <a href="./UsuarioRegistro.php">aquí</a>
        </div>
        
</form>

 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <script src="../controller/app.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
