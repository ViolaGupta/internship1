<html>
<head><title>day1</title></head>
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
    { $int =$_GET['txt1'];
     $fact=1;
   while($int>1)
   {$fact =$fact*$int;
    $int=$int-1;
   }
 echo "Factorial is ".$fact;
}

?>