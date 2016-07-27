<html>
<head><title>day1</title></head>
<body>
<form method="GET">
Enter a Char:
<input type="text" name="char">
<input type="submit">
</form>
</body>
</html>
<?php
 if(isset($_GET['char']) && !empty($_GET['char']) && ctype_alpha($_GET['char'])){
  $str=$_GET['char'];   
  if($str=='a' || $str=='e' || $str=='i' || $str=='o' || $str=='u' || $str=='A' || $str=='E' || $str=='I' || $str=='O' || $str=='U')
{echo "char: ".$str." is a vowel.<br>";}
 else
   {echo "Not a vowel <br>";}
    }
    $q;
    echo "Even numbers:<br> ";
    for($q=1;$q<=100;$q++)
    {
        if(($q%2)==0)
    {echo $q."<br>";}
    }
    echo "Odd Numbers: <br>";
    for($q=1;$q<=100;$q++)
    {
         if(($q%2)!=0)
         {echo $q."<br>";}
    }
    
?>