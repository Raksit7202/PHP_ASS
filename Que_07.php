<html>
	<head>
		<title>Ass_1 Que_7</title>
		<style type="text/css">
			table, th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table align="center" cellspacing="0px">
			<?php
			for($i=1;$i<=10;$i++) {
				echo "<tr>";
				for($j=1;$j<=10;$j++) {
					echo "<td>".$j*$i."</td>";
				}
				echo "</tr>";
			}
			?>
		</table>
	</body>
</html>