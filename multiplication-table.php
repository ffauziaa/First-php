<!DOCTYPE html>
<html>
  
<body>
    <center>
        <form method="POST">
            Enter a number: 
            <input type="text" name="number">
              
            <input type="Submit" 
                value="Show table">
        </form>
    </center>
</body>
  
</html>
<?php
if($_POST) {
    $num = $_POST["number"];
  
    echo ("<p style='text-align: center;'>
        Multiplication Table of $num: </p>
    ");
          
    for ($i = 1; $i <= 20; $i++) {
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p>
        ");
    }
}
?>