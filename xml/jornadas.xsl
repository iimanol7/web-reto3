<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
    <html>
      <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <title>Jornadas</title>
        <script src="../js/script.js" defer=""></script>
        <link rel="shortcut icon" href="../img/logo-liga.png" type="image/x-icon"></link>
      </head>
      <body>
    <!-- menú de navegación de la página web -->
        <header>
          <a href="index.html" class="logo">
            <img src="../img/logo-liga.png" alt="RFEBM" width="120px"/>
          </a>
          <div class="titulo">
            <h1>REAL FEDERACION ESPAÑOLA DE BALONMANO</h1>
          </div>
          <div class="poligon"></div>
          <nav id="nav">
            <!-- botón de cerrar para el menú para móviles -->
            <img src="../img/close-menu.png" class="close-menu" id="close-menu"/>
            <ul class="menu-horizontal">
              <li>
                <a href="../index.html">Inicio</a>
              </li>
              <li>
                <a href="../temporadas.xml">Temporadas</a>
              </li>
              <li>
                <a href="../noticias.html">Noticias</a>
              </li>
            </ul>
          </nav>
        <!-- botón de apertura del menú para móviles -->
        <img src="../img/open-menu.png" class="open-menu" id="open-menu"/>
        </header>

        <!-- ________________________________contenido-main_________________________________ -->
        <main class="equipos-main">

        <!-- ________________________________contenido-XML_________________________________ -->

        <ul class="nav-clasi">
          <li><a href="clasificacion_{//@temp}.xml">Clasificacion</a></li>
          <li><a href="jornadas_{//@temp}.xml" class="select">Jornadas</a></li>
          <li><a href="equipos_{//@temp}.xml">Equipos</a></li>
        </ul>

         <h2 class="nombreTemporada"><xsl:value-of select="//@temp"/></h2>


            <section class="container-jornadas">
              <!-- por cada partido... -->
  
                <section class="jornadas">
                  <ul class="ul-jornadas">
                    <xsl:for-each select="//jornada">
                    <xsl:variable name="numeroJornada" select="position()"/>
                      <li class="jornada" id="jornada{$numeroJornada}">
                        <xsl:for-each select ="partido">
                        <div class="partido">
                          <img src="../img/{local}.png"
                              width="120px"/>
                          <div class="hora-partido">
                              <p><xsl:value-of select="resultado"/></p>
                          </div><img
                              src="../img/{visitante}.png"
                              width="120px"/>
                        </div>
                      </xsl:for-each>
                      </li>
                    </xsl:for-each>
                  </ul>
                </section>     
            </section>    
            
          <!-- botones para cambiar la jornada -->
          <section class="jornadas-btn" id="jornadas-btn">
            <a class="a a1"  href="#jornada1">1</a>
            <a class="a a2"  href="#jornada2">2</a>
            <a class="a a3"  href="#jornada3">3</a>
            <a class="a a4"  href="#jornada4">4</a>
            <a class="a a5"  href="#jornada5">5</a>
            <a class="a a6"  href="#jornada6">6</a>
            <a class="a a7 " href="#jornada7">7</a>
            <a class="a a8"  href="#jornada8">8</a>
            <a class="a a9"  href="#jornada9">9</a>
            <a class="a a10" href="#jornada10">10</a>
        </section>

        <!-- ______________________________________________________________________________ -->
          <!-- botón para cambiar color de la página -->
          
        </main>

        <!-- pie de página -->
        <footer>
          <section class="top-footer">
            <div class="contacto">
              <h3>CONTACTO</h3>
              <ul>
                <li>
                  <img src="../img/icon-telefono.png" width="25px"/>+34 915 48 35 58
                </li>
                <li>
                  <img src="../img/icon-fax.png" width="25px"/>+34 915 42 70 49
                </li>
                <li>
                  <img src="../img/icon-mail.png" width="25px"/>
                  <a href="mailto:rfebm@rfebm.com">rfebm@rfebm.com</a>
                </li>
                <li>
                  <img src="../img/icon-ubi.png" width="25px"/>Ornilla Doctor Kalea, 2, 48004 Bilbo, Bizkaia
                </li>
              </ul>
            </div>
            <div class="redes">
              <h3>REDES</h3>
              <ul>
                <li>
                  <a href="https://www.instagram.com/rfebalonmano/?hl=es">
                    <img src="../img/icon-ig.png"
                                      width="50px"/>
                    <p>@rfebalonmano</p>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/RFEBalonmano?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                    <img
                                      src="../img/icon-twt.png" width="50px"/>
                    <p>@RFEBalonmano</p>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/@RFEBM">
                    <img src="../img/icon-yt.png" width="50px"/>
                    <p>@RFEBM</p>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="bottom-footer">
            <div class="copy-footer">
              <img src="../img/logo-liga.png" alt="RFEVB" width="50px"/> 
              <p>Copyright RFEBM.</p>
            </div>
            <div class="info-footer">
                      |
              <a href="footer/condiciones-legles.html">Condiciones Legales</a> |
              <a href="index.html">Inicio</a> |
            </div>
          </section>
        </footer>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>