<?php  

include('conexion.php');







 if(count($data) > 0)  
 {  
         
 
      $btn_name = $data->btnName;  
      if($btn_name == "ADD")  
      { 
           $nombreRol = mysqli_real_escape_string($connect, $data->nombreRol);   
           $query = "INSERT INTO tb_rol(NOMBRE) VALUES ('$nombreRol')";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Data Inserted...";  
           }  
           else  
           {  
                echo 'Error';  
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
 } 

 $output = array();  
 $query = "SELECT * FROM tb_rol";  
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