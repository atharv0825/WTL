<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  
 
  <xsl:template match="/students">
    <html>
      <body>
        <h2>Student List Sorted by Name</h2>
        <table border="1">
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Roll No</th>
            <th>Marks</th>
          </tr>
    
          <xsl:for-each select="student">
            <xsl:sort select="name" order="ascending" />
            <tr>
              <td><xsl:value-of select="name" /></td>
              <td><xsl:value-of select="age" /></td>
              <td><xsl:value-of select="rollno" /></td>
              <td><xsl:value-of select="marks" /></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>