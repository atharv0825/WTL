<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
         <html>
            <head>
                 <title>Student Information </title>
            </head>
            <body>
                 <h2>Student List </h2>
                 <xsl:apply-templates select="students/student"/>
            </body>
         </html>
    </xsl:template>

    <xsl:template match="student">
        <p><strong>Name:</strong> <xsl:value-of select="name"/> </p>
        <p><strong>Age:</strong> <xsl:value-of select="age"/> </p>
        <hr/>
    </xsl:template>
</xsl:stylesheet> 




