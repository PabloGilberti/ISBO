<?php
    function bucarUsuarioPorEmail(array $usuarios,$email){

        foreach($usuarios as $usuario){
                if ($usuario["email"]==$email){

                return  "El nombre es". $usuarios["nombre"];


                }
                return "el usuario no existe";

        }



    }




?>