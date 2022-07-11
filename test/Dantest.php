<!doctype html>
<html> 
	<head>
		<title>Cheese Search!</title>
	</head>
	<body>
		<form method="POST" action="Cheesetest.php">
			Search for Cheese Via Name:
			<input name="Cheese Type"/>
			<input type="submit"/>
		</form>
		<form method="POST" action="Cheesetest.php">
			Search for Cheese Via Texture:
			<input name="Cheese Texture"/>
			<input type="submit"/>
		</form>
		<table>
			<thead>
				<tr>
					<th>Cheese Name</th>
					<th>Texture</th>
					<th>Country</th>
					<th>Strength</th>
					<th>Price</th>
				</tr>
			</thead><br>
			<tbody>
				<?php foreach($listAllcheeses as $cheese) : ?>
				<tr>
					<td>Cheese1</td>
					<td>Text1</td>
					<td>Country1</td>
					<td>Str1</td>
					<td>Price1</td>
				</tr><br>
				<?php endforeach ?>
			</tbody>
		</table>
	</body>
</html>