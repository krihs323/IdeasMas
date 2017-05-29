<!DOCTYPE html>
 <html>
      <head>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <link rel="stylesheet" href="../css/estilos.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
           <script src="../controller/controlador_idea.js"></script>
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      </head>
      <body>
        <div class="ideasplusTitle">
            <span>Administrar ideas</span>
        </div>
           <br /><br />
           <div class="container" style="width:500px;">
                <div ng-app="myapp" ng-controller="ideacontroller" ng-init="displayData()">
                     <input type="hidden" ng-model="id" />
                     <label>Título Idea</label>
                     <input type="text" name="tituloIdea" ng-model="tituloIdea" class="form-control" />
                     <br /> <br />
                     <label>Área de interés</label>

                     <select ng-model="miProvinciaSeleccionada" ng-options="provincia as provincia.nombre for provincia in provincias track by provincia.idProvincia" >
                        <option value="">--Elige opcion--</option>
                      </select>
                     
                     <select ng-model="areainteresIdea" ng-options="idx as area for (idx, area) in areas" class="form-control">
                     </select>
                     <br />
                     <label>Descripción</label>
                     <br />
                     <textarea ng-model="descripcionIdea" name="descripcionIdea" ng-minlength="1" ng-maxlength="500" ngTrim="true" class="form-control" required>
                     </textarea>
                     <br /><br />
                     <label>Idea Privada </label>
                     <select ng-model="privadoIdea" ng-options="idx as estadoprivado for (idx, estadoprivado) in estadosprivados" class="form-control">
                     </select>
                     <br /> <br />
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>
                     <br /><br />
                </div>
           </div>
      </body>
 </html>