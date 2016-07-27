<html>
<head><title>day1</title></head>
<body>
<form method="POST">
Enter an Integer:
<input type="text" name="txt1">
<input type="submit"><br>
</form>
</body>
</html>

<?php
    
if(isset($_POST['txt1']) && !empty($_POST['txt1']) && ctype_digit($_POST['txt1']))
    { $count = 0 ;
        $int= $_POST['txt1']; //echo $int;
      $first = 0; $second = 1;
      echo $first." , ";
      echo $second." , ";
      while ($count < $int )
        { //echo "start";
          $next = $second + $first ; //echo "start";
          echo $next." , ";
          $first = $second ; $second = $next ;
          $count = $count + 1;
        }
    }
    ?>