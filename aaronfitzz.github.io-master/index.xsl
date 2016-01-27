<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">

<html>
<head>
		<title>web project .</title>
</head>
<body>
<div style="margin-left:8%">




<table style="float:left;margin-right: 5cm" border="1">
<tr bgcolor="FFFFCC">
<th>ManchesterUnited Players</th>
</tr>

<xsl:for-each select="football/league/team/player">
<tr>

<td>
<xsl:value-of select="name"/>
</td>

</tr>
 </xsl:for-each>
</table>


<table style="float:left;margin-right: 5cm" border="1">
<tr bgcolor="FFFFCC">
<th>Arsenal Players</th>
</tr>

<xsl:for-each select="football/league/team/player1">
<tr>

<td>
<xsl:value-of select="name"/>
</td>

</tr>
 </xsl:for-each>
</table>




<table style="float:left;margin-right: 5cm" border="1">
<tr bgcolor="FFFFCC">
<th>RealMadrid Players</th>
</tr>

<xsl:for-each select="football/league/team/player2">
<tr>

<td>
<xsl:value-of select="name"/>
</td>

</tr>
 </xsl:for-each>
</table>

</div>


</body>
</html>



</xsl:template>
</xsl:stylesheet>
