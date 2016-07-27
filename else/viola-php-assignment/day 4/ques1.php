<html>
<head><title>day4</title></head>
<body>
<form method="POST">
Enter an Integer:
<input type="text" name="txt1"><br>
Enter another Integer:
<input type="text" name="txt2">
Enter operation:
<input type="text" name="op">
<input type="submit"><br>
</form>
</body>
</html>

<?php
$n1=$_POST['txt1']; $n2=$_POST['txt2']; $ope=$_POST['op'];

function addition ()
{ global $n1,$n2;
 echo $n1+$n2;}
function subtraction ()
{global $n1,$n2;
echo $n1-$n2;}
function multiplication ()
{global $n1,$n2;
 echo $n1*$n2;}
function division ()
{global $n1,$n2;
echo $n1/$n2; }

switch($ope){
 case "addition" || "+":
   addition(); break;
  case "subtraction" || "-":
    subtraction(); break;
  case "multiplication" || "*":
    multiplication(); break;
  case "division" || "/":
    division(); break;
  default:
   echo "Enter operation in lower case!";
}
?>