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
		<label for="number">Enter a number :</label>
		<input type="number" name="number" id="number"/>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
    if($_POST){  
        $fact = 1;  
        $number = $_POST['number'];  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;
        }
        echo "Factorial of $number:<br><br>";
        echo $fact."<br>";  
    }  
?> 
</body>
</html>