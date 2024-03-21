<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<!-- definimos la key para diferenciar los tipos de componentes del equipo (entrenador y jugador) -->
  <xsl:key name="tipo" match="componente" use="@tipo"/>
  <xsl:template match="/">
  <html>
    <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="../css/style.css"/>
      <title><xsl:value-of select="equipo/@nombre"/></title>
      <script src="../js/script.js" defer=""></script>
      <link rel="shortcut icon" href="../img/logo-liga.png" type="image/x-icon"></link>
    </head>
    <body>
      <header>
        <a href="index.html" class="logo">
          <img src="../img/logo-liga.png" alt="RFEBM" width="120px"/>
        </a>
        <div class="titulo">
          <h1>REAL FEDERACION ESPAÑOLA DE BALONMANO</h1>
        </div>
        <div class="poligon"></div>
        <nav id="nav">
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
        <img src="../img/open-menu.png" class="open-menu" id="open-menu"/>
      </header>

      <!-- ________________________________contenido-main_________________________________ -->
      <main class="equipo-main">

       

        <section class="cabecera-equipo">
          <div class="cabecera-img" ><img src="{equipo/@escudo}" class="escudo-{equipo/@nombre}"/></div>
          <h1><xsl:value-of select="equipo/@nombre"/></h1>
        </section>
      <!-- ________________________________contenido-XML_________________________________ -->

      <h2>ENTRENADOR</h2>
      <section class="entrenadores">
        <xsl:for-each select="key('tipo' , 'entrenador')">
          <div class="entrenador">
            <div class="img-componente"><img src="../img/componentes/{imagen}"/></div>
            <div class="nombre-componente"><h3><xsl:value-of select="nombre"/></h3><h3><xsl:value-of select="apellidos"/></h3></div>
          </div>
        </xsl:for-each>
       </section>

       <h2>JUGADORAS</h2>
       <section class="jugadores">
        
        <xsl:for-each select="key('tipo' , 'jugador')">
        <div class="jugador">
          <div class="img-componente"><img src="../img/componentes/{imagen}"/></div>
          <div class="info-componente">
            <div class="nombre-componente"><h3><xsl:value-of select="nombre"/></h3><h3><xsl:value-of select="apellidos"/></h3></div>
            <div class="posicion-componente"><xsl:value-of select="posicion"/></div>
          </div>
        </div>
        </xsl:for-each>
       </section>

      <!-- ______________________________________________________________________________ -->
   
      </main>


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
            <a href="../footer/condiciones-legles.html">Condiciones Legales</a> |
            <a href="../index.html">Inicio</a> |
          </div>
        </section>
      </footer>
    </body>
  </html>
  </xsl:template>
</xsl:stylesheet>
