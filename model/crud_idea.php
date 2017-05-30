<?php  

include('conexion.php');

 if(count($data) > 0)  
 {  
         
      $btn_name = $data->btnName; 
     
      if($btn_name == "Publicar")  
      {
           $tituloIdea = mysqli_real_escape_string($connect, $data->tituloIdea);  
           $areainteresIdea = $data->areainteresIdea;
           $areainteresIdea = $areainteresIdea + 1;
           $descripcionIdea = mysqli_real_escape_string($connect, $data->descripcionIdea);
           $idUsuarioCrea = mysqli_real_escape_string($connect, $data->idUsuarioCrea);
           $privadoIdea = $data->privadoIdea;
          $hoy = date("Y").date("m").date("d") ;
          

           $query = "INSERT INTO tb_idea(TITULO, ID_AREA, DESCRIPCION, PRIVADO, ID_USUARIO_CREA, FECHA_PUBLICACION) VALUES ('$tituloIdea', $areainteresIdea, '$descripcionIdea', $privadoIdea,$idUsuarioCrea,$hoy)";  
          
           if(mysqli_query($connect, $query))  
           {  
                echo "Se ha insertado la nueva idea: " . $tituloIdea;  
           }  
           else  
           {  
                echo 'Error ha fallado la inserción la idea: ' . $tituloIdea;  
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
           $query = "DELETE FROM tb_rol WHERE ID_ROL = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data DELETE...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }
           if($btn_name == 'Mostrar')  
      {  
           $id = $data->id;  
           $query = "DELETE FROM tb_rol WHERE ID_ROL = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data DELETE...';  
           }  
           else  
           {  
                echo 'Error';  
           } 
          return;
      }
 } 

 $output = array();  
 $query = "SELECT * FROM tb_area_interes order by ID_AREAINTERES";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {
    while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 } 



 ?>  