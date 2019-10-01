<?php 
include_once('../clases/User.php');
$u = new User();
$u->set_username($_POST['username']);
$resultado = $u->validarUsername();
$fila = $resultado->fetch_assoc();


if($fila['count(username)'] >= 1){
   
    //regresar Alerta de username ya existente
    
}else{
    $u->set_correo($_POST['correo']);
    $resultado = $u->validarCorreo();
    $fila = $resultado->fetch_assoc();
    if($fila['count(correo)'] >= 1){
        
        //regresar Alerta de correo en uso
    }else{
        //parte ricolina
        $u->set_nombre($_POST['nombre']);
        $u->set_apellido($_POST['apellido']);
        $u->set_password($_POST['password']);
        
        $u->set_idInstitutoUser($_POST['instituto']);
        echo $u->get_idInstitutoUser();
        //$u->registrarEstudiante();
        
        //Continuamos esta noche :D
        
    }
    
    
    
    
}









