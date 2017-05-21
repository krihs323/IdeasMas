<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
          
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
           <script src="../controller/controlador_area_interes.js"></script>
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
          .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
            background: lightgrey;
          }

        </style>
        <div class="ideasplusTitle">
            <span>Administrar &Aacute;reas de Inter&eacute;s</span>
        </div>
           <br /><br />  
           <div class="container" style="width:500px;">  
               
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <label>Nombre de &Aacute;rea</label>  
                     <input type="text" name="nombreArea" ng-model="nombreArea" class="form-control" />  
                     <br />  

                      <label>Descripci&oacute;n del &Aacute;rea</label>  
                     <textarea name="descripcionArea" ng-model="descripcionArea" class="form-control" rows="5" cols="50">  </textarea>  
                     <br />  
                    
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Nombre &Aacute;rea</th>  
                               <th>Descripci&oacute;n</th>  
                               <th>Actualizar</th>  
                               
                                <th>Eliminar</th>
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.NOMBRE}}</td>  
                               <td>{{x.DESCRIPCION}}</td>  
                            
                               <td><button ng-click="updateData(x.ID_AREAINTERES, x.NOMBRE, x.DESCRIPCION)" class="btn btn-info btn-xs">Actualizar</button></td>
                                <td><button ng-click="deleteData(x.ID_AREAINTERES)" class="btn btn-info btn-xs">Eliminar</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 
 </script>  