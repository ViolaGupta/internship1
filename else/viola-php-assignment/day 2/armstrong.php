<html>
<head><title>HW</title></head>
<body>
<form method="GET">
Enter an Integer:
<input type="text" name="txt1">
<input type="submit"/><br>
</form>
</body>
</html>
<?php
    
    if(isset($_GET['txt1']) && !empty($_GET['txt1']) && ctype_digit($_GET['txt1']))
    {
        $num = $_GET['txt1'];
        
        $num1=$num;
        $sum=0; $t;
while($num1>0)
{ $t=(int)($num1%10);
  $sum = ($t*$t*$t) + $sum;
  $num1= (int)($num1/10);
 }
        
if($num==$sum)
 {echo "The integer is Armstrong.";}
else
 {echo "The number is not Armstrong.";}
}
   