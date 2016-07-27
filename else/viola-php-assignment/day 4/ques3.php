<html>
<head><title>day1</title></head>
<body>
<form method="POST">
Enter Name:
<input type="text" name="txt1">
<input type="submit"><br>
</form>
</body>
</html>

<?php
if(isset($_POST['txt1']) && !empty($_POST['txt1']) && ctype_alpha($_POST['txt1']))
{ $str=$_POST['txt1'];
  $arr=array("a"=>100,"b"=>500,"c"=>700,"d"=>800,"e"=>1000,"f"=>1200,"g"=>1500,"h"=>1800,"i"=>2000,"j"=>5000);
  echo $arr[$str]."<br>";
  foreach($arr as $h)
    {var_dump($h);;}
}
?>