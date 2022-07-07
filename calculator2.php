<!DOCTYPE html>
<head>
<style>
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
  border: 5px solid powderblue;
}
</style>
</head>
<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$Result = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
switch ($operator) {
case "Sum":
$Result = $FirstNumber + $SecondNumber;
break;
case "Subtraction":
$Result = $FirstNumber - $SecondNumber;
break;
case "Multiplication":
$Result = $FirstNumber * $SecondNumber;
break;
case "Division":
$Result = $FirstNumber / $SecondNumber;
}
}
?> 
 
<body>
    <center>
<div id="page-wrap">
<h1>Calculator</h1>
<form action="" method="post" id="quiz-form">
<p>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>First Number</b>
</p>
<p>
<input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
</p>
<p>
<input readonly="readonly" name="Result" value="<?php echo $Result; ?>"> <b>Result</b>
</p>
<input type="submit" name="operator" value="Sum" />
<input type="submit" name="operator" value="Subtraction" />
<input type="submit" name="operator" value="Multiplication" />
<input type="submit" name="operator" value="Division" />
</form>
</div>
     </center>
</body>
</html>