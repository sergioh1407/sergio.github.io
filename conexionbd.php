<?php                  
                        $host="localhost";
                        $dbname="gym_sistem";
                        $usuario="root";
                        $contrasenia="";
                        try {
                            $conn=new PDO("mysql:host=$host;dbname=$dbname",$usuario,$contrasenia);
                        }
                       catch ( Exception $ex) {
                            echo "no se pudo conectar";
                        }

?>