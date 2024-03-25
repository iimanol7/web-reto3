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
            //si es el administrador
            echo "<p>".$nombresesion['email']."</p>" ;
            echo "<p>".$nombresesion['nombre']." ".$nombresesion['apellidos'] ."</p>" ;
            if($nombresesion['nombre']=='admin'){
                echo "<p>Rol: Administrador<p>";
            } else   echo "<p>Rol: Usuario<p>";
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
           
            echo "<a href='login.html'>Iniciar Sesión</a>";
            echo "</div>";

            echo "</div>";
        }
        ?>