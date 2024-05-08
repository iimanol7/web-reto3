<?php
    error_reporting(0);
    session_start();
    $nombresesion = $_SESSION['sesion']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Noticias</title>
    <script src="js/script.js" defer></script>
    <link rel="shortcut icon" href="img/logo-liga.png" type="image/x-icon">
</head>
<?php
    if($nombresesion==""||$nombresesion==null){
        echo "<a href='index.php' class='poya'>No Gracias.</a>";
        include('php/includes/form.html');
        die();
    }else {
?>
<body>
<?php include('php/sesion.php') ?>
    <!-- menú de navegación de la página web -->
    <?php include('php/includes/header.php'); ?>

    <!-- Contenido de la página web -->
    <main class="noticias-main">

        <section class="ultima-hora">
            <div class="icono-noticia"></div>
            <h1>Última hora</h1>
        </section>
        <!-- noticia grande -->
        <section class="noticia-main">

            <div class="titulo-noticia">
                <h2>¡Emocionante arranque de la Liga Nacional de Balonmano con enfrentamientos de alto voltaje!</h2>
            </div>
            <div class="foto-noticia">
                <img src="https://img.rtve.es/imagenes/guerreras-balonmano-clasificacion-mundial-2023/1681331351136.jpg"
                    alt="">
            </div>


            <div class="texto-noticia">
                <p>En una jornada llena de acción y adrenalina, la Liga Nacional de Balonmano dio inicio con partidos
                    electrizantes entre los equipos más destacados de la competición. Los seis equipos participantes,
                    representando a ciudades emblemáticas de España, prometen una temporada llena de emociones y
                    rivalidades intensas.
                </p>
                <p>
                    En el primer enfrentamiento, el equipo de Bilbao se enfrentó al imponente conjunto de Barcelona en
                    un partido que mantuvo a los aficionados al borde de sus asientos. Ambos equipos demostraron un
                    nivel de juego excepcional, pero Bilbao logró imponerse con una estrecha victoria, dejando claro que
                    serán contendientes serios en la lucha por el título.</p>
            </div>
        </section>

        <!-- sección de noticias pequeñas -->
        <section class="container-noticias">
            <div class="noticia noticia1">
                <div><img src="https://e00-marca.uecdn.es/assets/multimedia/imagenes/2022/11/13/16683545557507.jpg">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Baja crucial para Barcelona: Estrella del equipo fuera por lesión</h3>
                    <p>La destacada jugadora de Barcelona se enfrenta a una lesión en el hombro que la dejará fuera de
                        la cancha durante las próximas tres semanas, generando preocupación en el equipo.</p>
                </div>
            </div>

            <div class="noticia noticia2">
                <div><img src="https://www.uv.es/recursos/fatwirepub/ccurl/699/326/portadaBalonmano.jpg"></div>
                <div class="contenido-noticia-pequeña">
                    <h3>Sanción sorpresa en Madrid: Jugadora clave suspendida por conducta antideportiva</h3>
                    <p>Una jugadora fundamental del equipo de Madrid enfrenta una suspensión de dos partidos debido a su
                        conducta antideportiva en el último encuentro, dejando al equipo con una ausencia importante.
                    </p>
                </div>
            </div>

            <div class="noticia noticia3">
                <div><img
                        src="https://imagenes.elpais.com/resizer/loEq04M_QljTJ49XqjIhl4rkAlQ=/1960x1470/filters:focal(2797x1005:2807x1015)/cloudfront-eu-central-1.images.arcpublishing.com/prisa/65AMPBPMXSTQWC64NRTFGQWFXM.jpg">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Zaragoza pierde a su portera titular por lesión en el calentamiento</h3>
                    <p>En un giro inesperado, la portera estrella de Zaragoza sufre una lesión durante el calentamiento,
                        obligándola a abandonar el partido antes incluso de comenzar.</p>
                </div>
            </div>

            <div class="noticia noticia4">
                <div><img src="https://www.estadiodeportivo.com/2018/04/05/1098x680/balonmano-triana.jpg"></div>
                <div class="contenido-noticia-pequeña">
                    <h3>Sevilla sin su capitana: Lesión de larga duración deja un vacío en el liderazgo</h3>
                    <p>La capitana de Sevilla se enfrenta a una lesión que la mantendrá fuera de la acción durante los
                        próximos meses, dejando un vacío en la plantilla y desafiando la fortaleza emocional del equipo.
                    </p>
                </div>
            </div>

            <div class="noticia noticia5">
                <div><img
                        src="https://news.ual.es/wp-content/uploads/2022/03/FOTO-3-MARZO-03-2022-ORO-BALONMANO-FEMENINO-EN-LOS-CAU.jpeg">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Bilbao enfrenta dilema defensivo: Dos jugadoras titulares suspendidas por acumulación de
                        tarjetas
                    </h3>
                    <p>El equipo de Bilbao se encuentra en apuros defensivos después de que dos de sus jugadoras
                        titulares sean suspendidas debido a la acumulación de tarjetas amarillas, planteando un desafío
                        estratégico para el entrenador.</p>
                </div>
            </div>

            <div class="noticia noticia6">
                <div><img
                        src="https://cdn1.img.sputniknews.lat/img/106278/95/1062789554_0:0:3122:1765_600x0_80_0_0_af782801c824110c77b9ca416c34ae56.jpg    ">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Sorpresiva lesión en Salamanca: Jugadora estrella fuera por un esguince de tobillo</h3>
                    <p>La máxima goleadora de Salamanca sufre un esguince de tobillo que la dejará fuera de la cancha en
                        las próximas semanas, afectando la capacidad ofensiva del equipo.</p>
                </div>
            </div>

            <div class="noticia noticia7">
                <div><img src="https://e00-marca.uecdn.es/assets/multimedia/imagenes/2023/12/17/17028354155377.jpg">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Zaragoza afronta crisis de defensa: Dos jugadoras claves en duda por molestias musculares</h3>
                    <p>La defensa de Zaragoza enfrenta incertidumbre ya que dos jugadoras fundamentales luchan contra
                        molestias musculares, planteando dudas sobre su disponibilidad en los próximos encuentros.</p>
                </div>
            </div>

            <div class="noticia noticia8">
                <div><img src="https://piks.eldesmarque.com/thumbs/680/bin/2023/12/01/paula_arcosjpg.jpg"></div>
                <div class="contenido-noticia-pequeña">
                    <h3>Problemas físicos en Sevilla: Tres jugadoras importantes en la lista de lesionadas</h3>
                    <p>Sevilla afronta un desafío físico significativo con tres jugadoras clave en la lista de
                        lesionadas, lo que pone a prueba la profundidad del plantel del equipo.</p>
                </div>
            </div>

            <div class="noticia noticia9">
                <div><img src="https://www.shutterstock.com/image-photo/de-la-plana-spain-07-600nw-2090150725.jpg">
                </div>
                <div class="contenido-noticia-pequeña">
                    <h3>Bilbao busca soluciones: Entrenadora desafía lesiones con estrategias innovadoras</h3>
                    <p>La entrenadora de Bilbao enfrenta el desafío de las lesiones con creatividad, implementando
                        nuevas estrategias y tácticas para mantener el rendimiento del equipo a pesar de las ausencias.
                    </p>
                </div>
            </div>
        </section>
        <!-- botón para hacer visible el formulario -->
        <?php
         //SI NO HAY UNA SESIÓN INICIADA
          if($nombresesion ==null || $nombresesion =="" ){
            echo '<section class="link-formulario">';
            echo '<a href="#" id="link-form">REGISTRATE</a> para recibir las últimas noticias sobre tus equipos favoritos!';
            echo '</section>';
          }
        ?>
        
        <!-- botón para cambiar color de la página web -->
        <section class="fix-btn">
            <img src="img/luna.png" alt="modo-oscuro" class="icon-tema" id="icon-tema">
        </section>
    </main>


    <!-- pie dde página -->
    <?php include('php/includes/footer.php'); ?>
</body>

</html>

<?php
    }
?>

