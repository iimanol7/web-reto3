<?php
    //error_reporting(0);
    //inicio la sesión
    session_start();
    //la guardo en una variable para mayor rapidez
    $nombresesion =$_SESSION['sesion'];
    include("php/usuarios.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
    <script src="js/script.js" defer></script>
    <link rel="shortcut icon" href="img/logo-liga.png" type="image/x-icon">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>


</head>

<body>
    <!-- SESION -->
<?php include('php/sesion.php'); ?>
    <!-- menú de navegación de la página web -->
   
    <?php include('php/includes/header.php'); 
    
    ?>
    <!-- Slider de imagenes de la portada -->
    <section class="container-slider">
        <ul class="slider">
            <li><img src="img/slider-1.jpg"></li>
            <li><img src="img/slider-2.jpg"></li>
            <li><img src="img/slider-3.jpg"></li>
            <li><img src="img/slider-4.jpg"></li>
        </ul>
    </section>
    <!-- Contenido de la página web -->
    <main class="inicio-main">

        <!-- Sección de la parte izquierda de la web -->
        <section class="section-resumenes">
            <!-- noticias incicio -->
            <section class="resumen-noticias">

                <section class="noticias-inicio">
                    <div class="header-noticias">
                        <h2>Noticias</h2>
                        <!-- botón para ir a la página de noticias -->
                        <div class="ver-mas">
                            <a href="noticias.html">Ver más noticias</a>
                            <div class="triangulo"></div>
                        </div>
                    </div>
                    <!-- noticias del inicio -->
                    <div class="noticia-i noticia-grande1">
                        <div><img src="https://www.estadiodeportivo.com/imagenes/90789d4b-7f26-498a-a730-a064de72c01c_1200x680.jpeg" alt=""></div>
                        <div class="contenido-noticia">
                            <h3>Lesión de la Jugadora Estrella Sacude al Equipo de Madrid</h3>
                            <p>En un inesperado giro de los acontecimientos, el equipo de balonmano femenino de Madrid
                                enfrenta una situación complicada con la lesión de su jugadora estrella, Marta López. La
                                lesión, una rotura en el ligamento cruzado anterior, ocurrió durante una intensa sesión
                                de entrenamiento la semana pasada. López, conocida por su habilidad excepcional en la
                                cancha y liderazgo dentro y fuera del campo, será una ausencia crucial para el equipo.
                            </p>
                            <p>Los médicos estiman que la rehabilitación podría llevar varios meses, lo que significa
                                que la jugadora no estará disponible para los próximos partidos cruciales de la
                                temporada. La noticia ha dejado al equipo de Madrid y a sus seguidores en un estado de
                                shock, ya que se enfrentan a la difícil tarea de llenar el vacío dejado por la ausencia
                                de su jugadora estrella. La entrenadora del equipo, Laura Rodríguez, expresó su
                                confianza en que el resto del equipo se unirá para superar este desafío y mantenerse
                                competitivas en la Liga de Balonmano Femenino.</p>
                        </div>
                    </div>

                    <div class="noticia-i noticia-grande2">
                        <div><img src="https://estaticos-cdn.prensaiberica.es/clip/c6d5b577-7d65-4a16-8742-ad13272a0338_alta-libre-aspect-ratio_default_0.jpg" alt=""></div>
                        <div class="contenido-noticia">
                            <h3>Éxito Contundente para Bilbao en un Duelo Épico con Barcelona</h3>
                            <p>En un enfrentamiento que quedará marcado en la memoria de los aficionados como uno de los
                                momentos más emocionantes de la temporada, el equipo de balonmano femenino de Bilbao
                                logró una victoria espectacular sobre Barcelona en un partido que se extendió hasta el
                                tiempo extra. El marcador final de 28-27 refleja la intensidad y la competitividad que
                                caracterizaron todo el encuentro.</p>
                            <p>Las jugadoras clave de Bilbao, lideradas por la hábil pivote Raquel González,
                                desempeñaron un papel fundamental en la victoria. González anotó el gol decisivo en los
                                últimos segundos del tiempo extra, sellando la victoria para su equipo. La euforia se
                                desató entre los seguidores de Bilbao, quienes celebraron la victoria en las redes
                                sociales y expresaron su orgullo por el rendimiento excepcional de su equipo en este
                                emocionante duelo.</p>
                        </div>
                    </div>

                    <div class="noticia-i noticia-pequeña1">
                        <div><img src="https://plazadeportiva.valenciaplaza.com/public/Image/2023/12/GBJD5QkXwAAq-qo_NoticiaAmpliada.jpg" alt=""></div>
                        <div class="contenido-noticia">
                            <h3>Controversias en el Partido Salamanca contra Sevilla</h3>
                            <p>El enfrentamiento entre Salamanca y Sevilla estuvo marcado por controversias, ya que
                                ambas partes expresaron su descontento con las decisiones arbitrales.</p>
                        </div>
                    </div>

                    <div class="noticia-i noticia-pequeña2">
                        <div><img src="https://img2.rtve.es/i/?w=1600&i=1700061434110.jpg" alt=""></div>
                        <div class="contenido-noticia">
                            <h3>Zaragoza Resurge Después de una Serie de Derrotas</h3>
                            <p>Tras una racha desfavorable, el equipo de balonmano femenino de Zaragoza ha recuperado el
                                impulso con una serie de victorias consecutivas.</p>
                        </div>
                    </div>

                </section>
                
            </section>
            <!-- sección de la parte derecha de la web -->
            <section class="resumen-tabla">

                <section class="section-tabla-resumen">
                    <div class="header-tabla">
                        <h2>Clasificacion</h2>
                    </div>
                    <!-- tabla resultados ocultos -->
                    <table class="tabla-inicio" border="1">
                        <tr>
                            <th>POS</th>
                            <th>EQUIPO</th>
                            <th>PTS</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img
                                    src="https://images.vexels.com/media/users/3/156928/isolated/preview/6c65c177e94e7554e1fdb0af3038acb7-icono-cuadrado-de-signo-de-interrogacion.png">
                            </td>
                            <td>X</td>
                        </tr>
                    </table>
                    <!-- botón para acceder a la clasificacuón -->
                    <div class="ver-mas ver-mas-tabla">
                        <a href="temporadas.php">Descubrir clasificación</a>
                        <div class="triangulo"></div>
                    </div>
                </section>
                <!-- videos de YT -->
                <section class="videos">
                    <iframe width="100%" src="https://www.youtube.com/embed/PAtlXFjuYFc?si=FagaBVht1ArdJi4N"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>

                    <iframe width="100%" src="https://www.youtube.com/embed/inHNxgbF1Kw?si=UQL803vOEBj3-umg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </section>
            </section>

        </section>
        <!-- sección de colaboradores -->
        <section class="colaboradores">
            <h2>Colaboradores</h2>
            <img src="img/colaboradores.png">
            <!-- imagen de colaboradores partida en 2, para móviles -->
            <div class="oculto">
                <img src="img/colaboradores2.png">
                <img src="img/colaboradores3.png">
            </div>
        </section>

        <section class="fix-btn">
            <img src="img/luna.png" alt="modo-oscuro" class="icon-tema" id="icon-tema">
        </section>

    </main>

<img id="easterEggImage" class="imgEaster" src="img/jugador.jpg" alt="Easter Egg">
<img id="easterEggImage2" class="imgEaster" src="img/vinicius-blanco.png" alt="Easter Egg">

<script>
    var egg = new Egg();
    egg
        .addCode("s,u,u,u,u", function() {
            var img = document.getElementById("easterEggImage");
            img.style.display = "block";
            setTimeout(function(){
                img.style.display = "none";
            }, 30); 
        })
        .listen();
        var egg2 = new Egg();
    egg2
        .addCode("m,o,n,o", function() {
            var img = document.getElementById("easterEggImage2");
            img.style.display = "block";
            setTimeout(function(){
                img.style.display = "none";
            }, 30); 
        })
        .listen();
</script>


    <!-- pie de página -->
    <?php include ('php/includes/footer.php'); ?>
</body>

</html>