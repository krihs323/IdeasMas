
<?php


include('conexion.php');
  $usuario = mysqli_real_escape_string($connect, $data->usuario);   
           $contrasena = mysqli_real_escape_string($connect, $data->contrasena);   



consultarLogin($usuario,$contrasena);
 
function consultarLogin($usuario,$contrasena){
    include('conexion.php');    

     $query = "SELECT * FROM tb_usuario INNER JOIN tb_rol ON tb_usuario.ID_ROL = tb_rol.ID_ROL WHERE CORREO = '$usuario' AND CONTRASENA = '$contrasena' ";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {
     
     if($row = $result->fetch_assoc()) {
        
        $obtenerTipo= $row['NOMBRE_ROL'];
        $obtenerNombre= $row ['NOMBRE'];
          $obtenerApellido= $row ['APELLIDO'];
        $obtenerID= $row ['ID_USUARIO'];
     }
     if($obtenerTipo=='Administrador'){
        session_start();
         $_SESSION['administrador']='YES';
      
         $bool =1;
        
     }else if($obtenerTipo=='Estudiante') {
          session_start();
          $_SESSION['usuario']='YES';
         $_SESSION['nombre']=$obtenerNombre;
          $_SESSION['apellido']=$obtenerApellido;
          $_SESSION['id']=$obtenerID;   
         $bool=2;
     }else{
         $bool=0;
     }
  
        $_SESSION['nombre']=$obtenerNombre;
 }else{
     $bool=0;
 }  
    echo $bool;
    

}
/*
,$documento,$tipodocumento,$correo$,$tipouser,$estado,$genero,$fechanacimiento,$contrasena,$telefono, $celular*/

?>