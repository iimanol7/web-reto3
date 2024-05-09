<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:key name="equipo" match="equipo" use="@nombre" />

  <xsl:template match="/">

    <html>
      <body>
        <main class="main-temporadas">
          <section class="clasificacion-temporada">
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
                  select="(count(//partido[local=current()/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &gt; goles-local])) * 3 + count(//partido[local=current()/@nombre and goles-local = goles-visitante or visitante=current()/@nombre and goles-visitante = goles-local])"
                  data-type="number" order="descending" /> <xsl:sort
                  select="sum(//partido[local=current()/@nombre]/goles-local) + sum(//partido[visitante=current()/@nombre]/goles-visitante)"
                  data-type="number" order="descending" /> <xsl:sort
                  select="sum(//partido[local=current()/@nombre]/goles-visitante) + sum(//partido[visitante=current()/@nombre]/goles-local)"
                  data-type="number" order="ascending" /> <xsl:variable name="equipo"
                  select="." /> <xsl:variable name="victorias"
                  select="count(//partido[local=$equipo/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=$equipo/@nombre and goles-visitante &gt; goles-local])" /> <xsl:variable
                  name="empates"
                  select="count(//partido[local=$equipo/@nombre and goles-local = goles-visitante and (goles-local != 0 or goles-visitante != 0)]) + count(//partido[visitante=$equipo/@nombre and goles-visitante = goles-local and (goles-local != 0 or goles-visitante != 0)])" /> <xsl:variable
                  name="derrotas"
                  select="count(//partido[local=$equipo/@nombre and goles-local &lt; goles-visitante]) + count(//partido[visitante=$equipo/@nombre and goles-visitante &lt; goles-local])" /> <xsl:variable
                  name="goles_favor"
                  select="sum(//partido[local=$equipo/@nombre]/goles-local) + sum(//partido[visitante=$equipo/@nombre]/goles-visitante)" /> <xsl:variable
                  name="goles_contra"
                  select="sum(//partido[local=$equipo/@nombre]/goles-visitante) + sum(//partido[visitante=$equipo/@nombre]/goles-local)" /> <xsl:variable
                  name="puntos" select="($victorias * 3) + $empates" /> <xsl:variable
                  name="partidos_jugados"
                  select="count(//partido[local=$equipo/@nombre and (goles-local != 0 or goles-visitante != 0)]) + count(//partido[visitante=$equipo/@nombre and (goles-local != 0 or goles-visitante != 0)])" /> <tr>
                  <td>
                    <xsl:value-of select="$position + position()" />
                  </td>
                  <td class="equipo-tabla">
                    <a href="#{@nombre}" class="aequipo">
                      <img src="../app/src/img/{@img}" />
                      <xsl:value-of select="@nombre" />
                    </a>
                  </td>
                  <td>
                    <xsl:value-of select="$puntos" />
                  </td>
                  <td>
                    <xsl:value-of select="$partidos_jugados" />
                  </td>
                  <td>
                    <xsl:value-of select="$victorias" />
                  </td>
                  <td>
                    <xsl:value-of select="$empates" />
                  </td>
                  <td>
                    <xsl:value-of select="$derrotas" />
                  </td>
                  <td>
                    <xsl:value-of select="$goles_favor" />
                  </td>
                  <td>
                    <xsl:value-of select="$goles_contra" />
                  </td>
                </tr>
              </xsl:for-each>
            </table>
          </section>
          <section>
            <xsl:for-each select="//equipo">
              <div class="info_equipo" id="{@nombre}">
                <img src="img/close-menu.png" class="close_equipo" />
                <div class="header_equipo">
                  <div class="container_escudo">
                    <img src="../app/src/img/{@img}" width="80px" />
                  </div>
                  <h2><xsl:value-of select="@nombre" /> (<xsl:value-of select="//@nombre" />)</h2>
                </div>
                <div class="jugadores_equipo">
                  <xsl:for-each select="jugador">
                    <div class="jugador_equipo">
                      <img src="../app/src/img/jugadores/{imagen}" class="foto_jugador" />
                      <p>
                        <xsl:value-of select="nombre" />
                      </p>
                    </div>
                  </xsl:for-each>
                </div>
              </div>
            </xsl:for-each>
          </section>
          <h2>Jornadas</h2>
          <section class="container-jornadas"> <!-- por cada partido... -->
            <section class="jornadas">
              <ul class="ul-jornadas">
                <xsl:for-each select="//jornadas/jornada">
                  <xsl:variable name="numeroJornada" select="position()" /> <li class="jornada"
                    id="jornada{$numeroJornada}">
                    <xsl:for-each select="partido">
                      <div class="partido">
                        <img src="../app/src/img/{escudo-local}" width="100px" />
                        <div class="resultados-partidos">
                          <p>
                            <xsl:value-of select="goles-local" />
                          </p>
                          <p>-</p>
                          <p>
                            <xsl:value-of select="goles-visitante" />
                          </p>
                        </div>
                        <img src="../app/src/img/{escudo-visitante}" width="100px" />
                      </div>
                    </xsl:for-each>
                  </li>
                </xsl:for-each>
              </ul>
            </section>
          </section> <!--
          botones para cambiar la jornada -->
          <section class="jornadas-btn" id="jornadas-btn">
            <a class="a a1" href="#jornada1">1</a>
            <a class="a a2" href="#jornada2">2</a>
            <a class="a a3" href="#jornada3">3</a>
            <a class="a a4" href="#jornada4">4</a>
            <a class="a a5" href="#jornada5">5</a>
            <a class="a a6" href="#jornada6">6</a>
            <a class="a a7" href="#jornada7">7</a>
            <a class="a a8" href="#jornada8">8</a>
            <a class="a a9" href="#jornada9">9</a>
            <a class="a a10" href="#jornada10">10</a>
          </section>
        </main>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>