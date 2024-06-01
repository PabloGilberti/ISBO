
<?php


function buscarUsuarioPorEmail($usuarios,$email){

    foreach($usuarios as $usuario){
          if($usuarios["email"]==$email){
              return "El Nombre del Usuario es".$usuarios["Nombre"];
          }
    }
        return "No existe el usuarios";
}


?>