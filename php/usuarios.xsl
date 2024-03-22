<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<!-- No puedo poner el "DOCTYPE" porque sino no funciona -->
	  <html>
	  <head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
			<title>Base de Datos de alumnos</title>
		</head>
	  <body>
	  <h2>Base de Datos de alumnos</h2>
	    <table border="1">
	      <tr bgcolor="orange">
	        <th>Nombre</th>
	        <th>Apellidos</th>
	        <th>Grupo</th>
	        <th>Nota</th>
	      </tr>
	      <xsl:for-each select="usuarios/usuario">
	      <tr>
	        <td><xsl:value-of select="nombre"/></td>
	        <td><xsl:value-of select="apellidos"/></td>
	        <td><xsl:value-of select="correo"/></td>
	        <td><xsl:value-of select="contraseña"/></td>
	      </tr>
	      </xsl:for-each>
	    </table>
	  </body>
	  </html>
	</xsl:template>
</xsl:stylesheet>