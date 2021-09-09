<html>
<head>
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button { /* This not worked in firefox */
        -webkit-appearance: none;
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
        $number = $_POST['number'];  
        for($i=1;$i<=$number;$i++) {         
            if ((($i%3)==0) && (($i%5)==0)) {
                echo "FizzBuzz - ";
            } elseif (($i%3)==0) {
                echo "Fizz - ";
            } elseif (($i%5)==0) {
                echo "Buzz - ";
            } else {
                echo $i." - ";
            }
            if(($i%10)==0) {
                echo "<br/>";
            }
        } 
    }
    ?>
</body>  
</html>