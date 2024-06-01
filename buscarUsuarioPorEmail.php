<?php
<<<<<<< HEAD
    function bucarUsuarioPorEmail(array $usuarios,$email){

        foreach($usuarios as $usuario){
                if ($usuario["email"]==$email){

                return  "El nombre es". $usuarios["nombre"];


                }
                return "el usuario no existe";

        }



    }


=======


function buscarUsuarioPorEmail($usuarios,$email){

    foreach($usuarios as $usuario){
          if($usuarios["email"]==$email){
              return "El Nombre del Usuario es".$usuarios["Nombre"];
          }
    }
        return "No existe el usuarios";
}
>>>>>>> rama2


?>