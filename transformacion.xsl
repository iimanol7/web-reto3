<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:key name="equipo" match="equipo" use="@nombre" />

  <xsl:template match="/">
    <html>
      <body>
        <main class="main-temporadas">
          <section class="clasificacion-temporada">
            <h2>Clasificación</h2>
            <table class="">
              <tr>
                <th>Posición</th>
                <th>Equipo</th>
                <th>Puntos</th>
                <th>Partidos Jugados</th>
                <th>Partidos Ganados</th>
                <th>Partidos Empatados</th>
                <th>Partidos Perdidos</th>
                <th>Goles a Favor</th>
                <th>Goles en Contra</th>
              </tr>
              <xsl:variable name="position" select="0" />
              <xsl:for-each
                select="//equipo[generate-id() = generate-id(key('equipo', @nombre)[1])]">
                <xsl:sort
                  select="sum(//partido[local=current()/@nombre]/goles-local) + sum(//partido[visitante=current()/@nombre]/goles-visitante)"
                  data-type="number" order="descending" />
                <tr>
                  <td>
                    <xsl:value-of select="$position + position()" />
                  </td>
                  <td class="equipo-tabla">
                    <div>
                      <img src="img/{@img}" />
                      <xsl:value-of select="@nombre" />
                    </div>
                  </td>
                  <td>
                    <xsl:variable name="victorias"
                      select="count(//partido[local=current()/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &gt; goles-local])" />
                    <xsl:variable name="empates"
                      select="count(//partido[local=current()/@nombre and goles-local = goles-visitante or visitante=current()/@nombre and goles-visitante = goles-local])" />
                    <xsl:value-of select="($victorias * 3) + ($empates)" />
                  </td>
                  <td>
                    <xsl:value-of
                      select="count(//partido[local=current()/@nombre or visitante=current()/@nombre])" />
                  </td>
                  <td>
                    <xsl:value-of
                      select="count(//partido[local=current()/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &gt; goles-local])" />
                  </td>
                  <td>
                    <xsl:value-of
                      select="count(//partido[local=current()/@nombre and goles-local = goles-visitante or visitante=current()/@nombre and goles-visitante = goles-local])" />
                  </td>
                  <td>
                    <xsl:value-of
                      select="count(//partido[local=current()/@nombre and goles-local &lt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &lt; goles-local])" />
                  </td>
                  <td>
                    <xsl:value-of
                      select="sum(//partido[local=current()/@nombre]/goles-local) + sum(//partido[visitante=current()/@nombre]/goles-visitante)" />
                  </td>
                  <td>
                    <xsl:variable name="goles_en_contra"
                      select="sum(//partido[local=current()/@nombre]/goles-visitante) + sum(//partido[visitante=current()/@nombre]/goles-local)" />
                    <xsl:value-of select="$goles_en_contra" />
                  </td>
                </tr>
              </xsl:for-each>
            </table>
          </section>

          <h2>Jornadas</h2>
          
          <section class="container-jornadas">
            <!-- por cada partido... -->

            <section class="jornadas">
              <ul class="ul-jornadas">
                <xsl:for-each select="//jornadas/jornada">
                  <xsl:variable name="numeroJornada" select="position()" />
                    <li class="jornada"
                    id="jornada{$numeroJornada}">
                    <xsl:for-each select="partido">
                      <div class="partido">
                        <img src="img/{local}.png"
                          width="120px" />
                        <div class="resultados-partidos">
                          <p>
                            <xsl:value-of select="goles-local" />
                          </p>
                          <p>-</p>
                          <p>
                            <xsl:value-of select="goles-visitante" />
                          </p>
                        </div>
                        <img
                          src="img/{visitante}.png"
                          width="120px" />
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

        </main>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>