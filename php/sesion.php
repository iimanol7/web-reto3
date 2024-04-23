<?php
        //si hay alguna sesión iniciada
        if($nombresesion !=null || $nombresesion !="" ){
            //creo un div con el nombre del usuario 
            echo "<div class='sesion-main'>";
                echo "<div class='sesion' id='sesion'>";
                    echo "<img src='img/jugador.jpg' width='40px'>";
                    echo "<div class='user'> <p>".$nombresesion['nombre']."</p> <p>".$nombresesion['rol']."</p></div>";
                    echo " <div class='triangulo'></div>";
                echo "</div>";

                echo "<div class='sesion-down' id='sesion-down'>";
                    echo "<div class='card_header'>";
                        echo "<img src='img/jugador.jpg' width='70px'>";
                        echo "<h3>".$nombresesion['nombre']."</h3>" ;
                    echo "</div>";

                    echo "<div class='card_body'>";
                        echo "<h4>".$nombresesion['nombre']." ".$nombresesion['apellidos'] ."</h4>" ;
                        echo "<p>".$nombresesion['email']."</p>" ;
                        //echo "<p class='rol'>Rol:</p>" ;
                        echo "<p> <span>Rol:</span>".$nombresesion['rol']."</p>" ;
                    echo "</div>";

                    echo "<div class='card_footer'>";
                        echo "<a href='php/cerrar_sesion.php'>cerrar sesión</a>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        
        }else{
            //si no hay ninguna sesión iniciada
            echo "<div class='sesion-main'>";
            echo "<div class='sesion' id='sesion'>";
            echo "<img src='img/user.webp' width='40px'>";
            //sesíon del usuario
            echo " <div class='triangulo'></div>";
        
            echo "</div>";

            echo "<div class='sesion-down sesion-down-no' id='sesion-down'>";
           
            echo "<a href='login.html' class='ñ'>Iniciar Sesión</a>";
            echo "</div>";

            echo "</div>";
        }
        ?>

        