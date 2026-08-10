<?php
    include('conexion.php');
   error_reporting(E_ALL);  //CONTROLA ERRORES 
   ini_set('display_errors', '1');
   <!-- Se verifica si el formulario ha sido enviado mediante el método POST -->   
   

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre =  trim($_POST['nombre']);
        $apellido =  trim($_POST['apellido']);
        $celular =  trim($_POST['celular']);
        $correo =  trim($_POST['correo']);
        $sexo =  trim($_POST['sexo']);
        $comentario = trim($_POST['comentario']);
        
        if(isset($_POST['btnenviar'])){
            if(empty($nombre) || empty($apellido) || empty($celular) || empty($correo) or empty($sexo) or empty($comentario)){
                echo '<script> alert("Ingrese todos los campos");</script>';
                echo '<script>window.location.href=("index.html");</script>';
            }else{
                //usamos una cosulta de registro preparada
                $sql = "INSERT INTO usuario_canasta (nombre, apellido, celular, correo, sexo, comentario) VALUES('$nombre', '$apellido', $celular, '$correo', '$sexo', '$comentario')";
                mysqli_query($conexion, $sql);
                echo '<script> alert("Datos enviados correctamente");window.location.href=("index.html");</script>';
            }
        }
        mysqli_close($conexion); 
    }
    if (isset($conexion)) {
    mysqli_close($conexion);
}
?>