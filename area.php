<html>
<head>
    <style>
body {background-color: powderblue;}
        </style>
</head>  
<body>  
<form method = "post" style = "color:blue">   
Width: <input type="number" name="width" placeholder="Enter the width">   
<br><br>   
Length: <input type="number" name="length" placeholder="Enter the length">
<br><br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length;   
echo "The area of a rectangle with $width x $length is $area";   
}   
?>  
 