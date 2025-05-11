<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TYA Students</title>
                <link rel="stylesheet" type="text/css" href="styles.css"/>
            </head>
            <body>
                <h1>TYA Students List</h1>
                <table border="1">
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                    <xsl:for-each select="Students/TYA">
                        <tr>
                            <td><xsl:value-of select="RollNo"/></td>
                            <td><xsl:value-of select="Name"/></td>
                            <td><xsl:value-of select="Address"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
