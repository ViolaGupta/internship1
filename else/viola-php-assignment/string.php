<html>
<head><title>day1</title></head>
<body>
<form method="POST">
Enter Name:
<input type="text" name="txt1[]" >
<input type="submit"><br>
</form>
</body>
</html>

<?php
    $arr=array(); $i;
   $arr=$_POST['txt1'];
    foreach($arr as $h)
    {echo $h." ";
     for($i=0;$i<(strlen($h));$i++)
      {echo $h[$i]." ";}
    }
    echo "<br>";
    foreach($arr as $h)
    { echo ucwords($h)." ";
    }
?>