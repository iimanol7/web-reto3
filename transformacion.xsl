<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
    <title>Tabla de Resultados</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
      }
      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <h2>Tabla de Resultados</h2>
    <table>
      <tr>
        <th>Equipo</th>
        <th>Puntos</th>
        <th>Partidos Jugados</th>
        <th>Ganados</th>
        <th>Empatados</th>
        <th>Perdidos</th>
        <th>Goles a Favor</th>
        <th>Goles en Contra</th>
      </tr>
      <xsl:apply-templates select="/temporada/equipos/equipo"/>
    </table>
  </body>
  </html>
</xsl:template>

<xsl:template match="equipo">
  <tr>
    <td><xsl:value-of select="@nombre"/></td>
    <td><xsl:value-of select="sum(../../jornadas/jornada/partido/equipo[@local=@nombre]/@goles_local) + sum(../../jornadas/jornada/partido/equipo[@visitante=@nombre]/@goles_visitante)"/></td>
    <td><xsl:value-of select="count(../../jornadas/jornada/partido[equipo[@local=@nombre] or equipo[@visitante=@nombre]])"/></td>
    <td><xsl:value-of select="count(../../jornadas/jornada/partido[equipo[@local=@nombre] and equipo[@visitante=@nombre] and (@goles_local > @goles_visitante)])"/></td>
    <td><xsl:value-of select="count(../../jornadas/jornada/partido[equipo[@local=@nombre] and equipo[@visitante=@nombre] and (@goles_local = @goles_visitante)])"/></td>
    <td><xsl:value-of select="count(../../jornadas/jornada/partido[equipo[@local=@nombre] and equipo[@visitante=@nombre] and (@goles_local &lt; @goles_visitante)])"/></td>
    <td><xsl:value-of select="sum(../../jornadas/jornada/partido/equipo[@local=@nombre]/@goles_local) + sum(../../jornadas/jornada/partido/equipo[@visitante=@nombre]/@goles_visitante)"/></td>
    <td><xsl:value-of select="sum(../../jornadas/jornada/partido/equipo[@local=@nombre]/@goles_visitante) + sum(../../jornadas/jornada/partido/equipo[@visitante=@nombre]/@goles_local)"/></td>
  </tr>
</xsl:template>

</xsl:stylesheet>
