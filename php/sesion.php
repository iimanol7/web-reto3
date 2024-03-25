<?php
        //si hay alguna sesión iniciada
        if($nombresesion !=null || $nombresesion !="" ){
            //creo un div con el nombre del usuario 
            echo "<div class='sesion-main'>";
            echo "<div class='sesion' id='sesion'>";
            echo "<img src='img/jugador.jpg' width='40px'>";
            //sesíon del usuario
            echo " <div class='triangulo'></div>";
        
            echo "</div>";

            echo "<div class='sesion-down' id='sesion-down'>";
            echo "<p>".$nombresesion['nombre']." ".$nombresesion['apellidos'] ."</p>" ;
            echo "<p>".$nombresesion['email']."</p>" ;
            echo "<a href='php/cerrar_sesion.php'>cerrar sesión</a>";
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
           
            echo "<a href='register.html'>Iniciar Sesión</a>";
            echo "</div>";

            echo "</div>";
        }
        ?>