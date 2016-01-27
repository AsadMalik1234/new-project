<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">

<html>
<head>
		<title>web project .</title>
</head>
<body>
<div style="margin-left:0.5%">


<table style="float:left;margin-right: 0.8cm" border="1">
<tr bgcolor="FFFFCC">
<th>Fixture Matchs RealMadrid </th>
<th>Date</th>
<th>Time</th>
</tr>

<xsl:for-each select="fixtures/RealMadrid">
<tr bgcolor="white">

<td>
<xsl:value-of select="match"/>
</td>
<td>
<xsl:value-of select="date"/>
</td>
<td>
<xsl:value-of select="time"/>
</td>
</tr>
 </xsl:for-each>
</table>


<table style="float:left;margin-right: 0.8cm" border="1">
<tr bgcolor="FFFFCC">
<th>Fixture Matchs Man United </th>
<th>Date</th>
<th>Time</th>
</tr>

<xsl:for-each select="fixtures/ManchesterUnited">
<tr bgcolor="white">

<td>
<xsl:value-of select="match"/>
</td>
<td>
<xsl:value-of select="date"/>
</td>
<td>
<xsl:value-of select="time"/>
</td>
</tr>
 </xsl:for-each>
</table>


<table style="float:left;margin-right:  0.8" border="1">
<tr bgcolor="FFFFCC">
<th>Fixture Matchs Arsenal </th>
<th>Date</th>
<th>Time</th>
</tr>

<xsl:for-each select="fixtures/Arsenal">
<tr bgcolor="white">

<td>
<xsl:value-of select="match"/>
</td>
<td>
<xsl:value-of select="date"/>
</td>
<td>
<xsl:value-of select="time"/>
</td>
</tr>
 </xsl:for-each>
</table>


</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
