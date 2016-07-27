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
    
 if(isset($_POST['txt1']) && !empty($_POST['txt1']) )
    { $sal =$_POST['txt1']; $gross; $da; $hra;
    if($sal<=2000)
    {  echo $sal; $da=(int)($sal/10); $hra=(int)($sal/5);
         $gross = $sal + $da + $hra; }
    elseif(2000<$sal && $sal<=5000)
        {  echo $sal; $da=(int)($sal/5); $hra=(int)($sal*(3/10));
         $gross = $sal + $da +$hra ; }
   elseif(5000<$sal && $sal<=10000)
        {  echo $sal; $da=(int)($sal*(3/10)); $hra=(int)($sal*(4/10));
        $gross = $sal +$da+$hra ;}
   else 
   {  echo $sal;
        $gross = $sal*2;}
echo " <br>Gross salary: ".$gross;
   
}
?>