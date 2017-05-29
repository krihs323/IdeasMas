<?php  

include('conexion.php');

 if(count($data) > 0)  
 {  
         
      $btn_name = $data->btnName; 
     
      if($btn_name == "ADD")  
      {
           $tituloIdea = mysqli_real_escape_string($connect, $data->tituloIdea);  
           $areainteresIdea = $data->areainteresIdea;
           $areainteresIdea = $areainteresIdea + 1;
           $descripcionIdea = mysqli_real_escape_string($connect, $data->descripcionIdea);
           $privadoIdea = $data->privadoIdea;
          
           $query = "INSERT INTO tb_idea(TITULO, ID_AREA, DESCRIPCION, PRIVADO) VALUES ('$tituloIdea', $areainteresIdea, '$descripcionIdea', $privadoIdea)";  
          
           if(mysqli_query($connect, $query))  
           {  
                echo "Se ha insertado la nueva idea: " . $tituloIdea;  
           }  
           else  
           {  
                //echo 'Error ha fallado la inserción la idea: ' . $tituloIdea;  
                echo $query;  
           }
          return;
      }  
      if($btn_name == 'Update')  
      {  
           $nombreRol = mysqli_real_escape_string($connect, $data->nombreRol);   
           $id = $data->id;  
           $query = "UPDATE tb_rol SET NOMBRE = '$nombreRol' WHERE ID_ROL = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data Updated...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }  
      if($btn_name == 'deleteData')  
      {  
           $id = $data->id;  
           $query = "DELETE FROM tb_idea WHERE ID_IDEA = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data DELETE...';  
                //echo $query;  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }
 } 



if(isset($_GET["data"])){
  $variable = $_GET["data"];
}else{
  $variable = 0;
}

if ($variable==0){ 
   $output = array();  
    //$query = "SELECT NOMBRE FROM tb_area_interes order by ID_AREAINTERES";  
   $query = "SELECT ID_IDEA, TITULO, DESCRIPCION FROM tb_idea order by ID_IDEA;";  
   $result = mysqli_query($connect, $query);  
   if(mysqli_num_rows($result) > 0)  
   {  
        while($row = mysqli_fetch_array($result))  
        {  
             $output[] = $row;  
        }  
        echo json_encode($output);  
        unset ($output);
   } 
}




if ($variable == 1){
  $output2 = array();  
    //$query = "SELECT NOMBRE FROM tb_area_interes order by ID_AREAINTERES";  
   $query = "SELECT NOMBRE FROM tb_area_interes order by ID_AREAINTERES";  
   $result = mysqli_query($connect, $query);  
   if(mysqli_num_rows($result) > 0)  
   {  
        while($row = mysqli_fetch_array($result))  
        {  
             $output2[] = $row;  
        }  
        echo json_encode($output2);  
        unset ($output2);
   } 
}







 ?>  