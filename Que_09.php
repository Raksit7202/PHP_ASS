<html>
<head>
	<style type="text/css">
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button { /* This not worked in firefox */
		-webkit-appearance: none;	/* To hide side buttons of number input */
		margin: 0;
	}
	</style>
</head>
<body>
	<form method="post">
		<label for="number"> Enter a number :</label>
		<input type="number" name="number" id="number" value="" />
		<input type="submit" name="submit" id="submit"/>
	</form>
	<?php
	if($_POST) {
		$number=$_POST['number'];
		$num=1;
		for($i=0;$i<=$number;$i++) {
			for($j=0;$j<$i;$j++) {
				echo $num++." ";
			}
			echo "<br/>";
		}
	}
	?>
</body>
</html>