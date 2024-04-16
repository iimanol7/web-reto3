<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:key name="equipo" match="equipo" use="@nombre" />

  <xsl:template match="/">
    <html>
      <head>
        
      </head>
      <body>
        <h2>Estadísticas de la temporada</h2>
        <table>
          <tr>
            <th>Posición</th>
            <th>Equipo</th>
            <th>Puntos</th>
            <th>Partidos Jugados</th>
            <th>Partidos Ganados</th>
            <th>Partidos Empatados</th>
            <th>Goles</th>
          </tr>
          <xsl:variable name="position" select="0"/>
          <xsl:for-each select="//equipo[generate-id() = generate-id(key('equipo', @nombre)[1])]">
          <xsl:sort select="sum(//partido[local=current()/@nombre]/goles-local) + sum(//partido[visitante=current()/@nombre]/goles-visitante)" data-type="number" order="descending"/>
            <tr>
              <td><xsl:value-of select="$position + position()"/></td>
              <td><xsl:value-of select="@nombre"/></td>
              <td>
                <xsl:variable name="victorias" select="count(//partido[local=current()/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &gt; goles-local])"/>
                <xsl:variable name="empates" select="count(//partido[local=current()/@nombre and goles-local = goles-visitante or visitante=current()/@nombre and goles-visitante = goles-local])"/>
                <xsl:value-of select="($victorias * 3) + ($empates)"/>
              </td>
              <td><xsl:value-of select="count(//partido[local=current()/@nombre or visitante=current()/@nombre])"/></td>
              <td><xsl:value-of select="count(//partido[local=current()/@nombre and goles-local &gt; goles-visitante]) + count(//partido[visitante=current()/@nombre and goles-visitante &gt; goles-local])"/></td>
              <td><xsl:value-of select="count(//partido[local=current()/@nombre and goles-local = goles-visitante or visitante=current()/@nombre and goles-visitante = goles-local])"/></td>
              <td><xsl:value-of select="sum(//partido[local=current()/@nombre]/goles-local) + sum(//partido[visitante=current()/@nombre]/goles-visitante)"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
