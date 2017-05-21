
<?php

require 'connector.php';

$JSON       = file_get_contents("php://input");
$request    = json_decode($JSON);
$usuario    = $request->usuario; 
$contrasena = $request->contrasena;



consultarLogin($usuario,$contrasena);
 
function consultarLogin($usuario,$contrasena){
    $sql ="SELECT * FROM tb_usuario WHERE CORREO = '$usuario' AND CONTRASENA = '$contrasena' "; 
    try {
        $db = getConnection();
        $stmt = $db->query($sql);  
        $usuario = $stmt->fetchObject();
        $db = null;
        echo  json_encode($usuario);
    } catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}'; 
    }
}
/*
,$documento,$tipodocumento,$correo$,$tipouser,$estado,$genero,$fechanacimiento,$contrasena,$telefono, $celular*/

?>