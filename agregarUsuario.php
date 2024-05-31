<?php
function agregarUsuario(array $usuarios, $nombre,$edad, $email){

                $usuarios=[
                    "nombre"    =>$nombre,
                    "edad"      =>$edad,
                    "email"     =>$email
                ];
                return $usuarios;                  
}






?>