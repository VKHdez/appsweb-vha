<html>
<head> <title> </title> </head>
<body>
	<h2> Voto </h2>
	<hr>
	<form action = "recibir.php" method = "Post">

		Nombre del votante:
		<input type = "text" name = "id">
		<br> <br>

		<table border = 1>
			<tr>
				<td> <img src = "pri.jpg"  width="100" height="100"> </td>
				<td> <img src = "pan.jpg"  width="100" height="100"> </td>
				<td> <img src = "prd.jpg"  width="100" height="100"> </td>
				<td> <img src = "morena.jpg"  width="100" height="100"> </td>
			</tr>
			<tr>
				<td> <input type="radio" name="partido" value="pri" checked>PRI </td>
				<td> <input type="radio" name="partido" value="pan" checked>PAN </td>
				<td> <input type="radio" name="partido" value="prd" checked>PRD </td>
				<td> <input type="radio" name="partido" value="morena" checked>MORENA </td>
			</tr>
		</table>
		<br>
		<input type = "submit" name = "enviar" value = "Enviar voto">
	</form>
</body>
</html>
