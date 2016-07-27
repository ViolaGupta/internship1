<html>
<head><title>Php oops</title></head>
<body>
<form method="post">

Length:
<input type="text" name="length"/>
Breadth:
<input type="text" name="breadth"/><br>
Base:
<input type="text" name="base"/>
Height:
<input type="text" name="height"/>
<input type="submit" name="rectarea" value="Rectangle Area">
<input type="submit" name="triarea" value="Triangle Area">

</form>

<?php
    
abstract class shapes{

abstract public function area();
}
 class rectangle extends shapes{
 public function area()
 { $length=$_POST['length']; $breadth=$_POST['breadth'];
   $area=$length*$breadth;
   return $area;
  }
}
class triangle extends shapes{
  public function area()
 { $base=$_POST['base']; $height=$_POST['height'];
   $area=0.5*$base*$height;
   return $area;
  }
}

if(isset($_POST['rectarea']))
{ $rectobject = new rectangle();
  echo "Rectangle area = ".$rectobject->area();
}
if(isset($_POST['triarea']))
{ $triobject = new triangle();
  echo "Triangle area = ".$triobject->area();
}
?>
</body>
</html>
