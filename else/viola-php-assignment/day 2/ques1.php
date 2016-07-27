<html>
<head><title>day1</title></head>
<body>
<form method="POST">
Enter an Integer:
<input type="text" name="txt1">
<input type="submit"/><br>
</form>
</body>
</html>
 
<?php
   
    
if(isset($_POST['txt1']) && !empty($_POST['txt1']) && ctype_digit($_POST['txt1']))
    { $int=$_POST['txt1']; $t; $count=0; 
        for($t=2;$t<=(int)($int/2);$t++)
        {if(($int%$t)==0)
         {echo "Not a prime number"; $count=1; break;}
        }
      if($count==0){echo "Prime number";}
        
   }
?>