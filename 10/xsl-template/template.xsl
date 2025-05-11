<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match=" / ">
     <html>
       <body>
          <xsl:apply-templates select="students/student"/>
       </body>
     </html>
  </xsl:template>

  <xsl:template match="student">
     <p>Name: <xsl:value-of select="name"/></p>
     <p>Age: <xsl:value-of select="age"/></p>
  </xsl:template>

</xsl:stylesheet>