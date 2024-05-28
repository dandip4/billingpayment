<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post">

		<?php
		for ($i=1; $i <=5; $i++) { 
			echo "<label>";
			echo "<input type='checkbox' name='input[]' value='Kegiatan ".$i.", ".($i*1000)."'>".($i*1000);
			echo "</label>";
			echo "<br>";
		}
		?>
		<input type="submit" name="submit">
	</form>
</body>
</html>