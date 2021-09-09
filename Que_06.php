<html>
	<head>
		<title> chess design </title>
	</head>
<body>
	<div>
		<table align=center border=1>
		<?php for($i=0;$i<8;$i++) { ?>
		<tr>
  	<?php if($i%2): ?>
			<?php for($j=0;$j<8;$j++) { ?>
				<?php if($j%2): ?>
					<td style="background-color:black"></td>
				<?php else: ?>
					<td height=30px width=30px> </td>
				<?php endif; ?>
				<?php } ?>
				</tr>
		<?php else: ?>
			<?php for($j=0;$j<8;$j++) { ?>
				<?php if(!($j%2)): ?>
					<td style="background-color:black"></td>
				<?php else: ?>
					<td height=30px width=30px> </td>
				<?php endif; ?>
				<?php } ?>
				</tr>
			<?php endif; ?>
			<?php } ?>
		</table>
	</div>
</body>
</html>