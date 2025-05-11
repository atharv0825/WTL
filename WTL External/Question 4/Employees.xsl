<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="/">
		<html>
			<head>
				<title>Employee Table</title>
				<style>
					body{
						text-align:center;
						font-family : "Poppins";
						
					}
						
					table{
						margin:auto;
						width:60%;
						border-collapse:collapse;
					}

					th , td{
						border : 1px solid #333;
						padding : 8px;
						text-align : center;
					}

					th{
						background-color : #007bbf;
						color : white;
					}
				
					tr:nth-child(even){
						background-color : #f2f2f2;
					}
				</style>
			</head>
			<body>
				<h2>Employee Details</h2>
				<table border="1">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Department</th>
					</tr>	
					
					<xsl:for-each select="employees/employee">
						<tr>
							<td><xsl:value-of select="id"/></td>
							<td><xsl:value-of select="name"/></td>
							<td><xsl:value-of select="department"/></td>
						</tr>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template> 

</xsl:stylesheet>
