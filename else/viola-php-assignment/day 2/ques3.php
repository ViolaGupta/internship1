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
if(isset($_POST['txt1']) && !empty($_POST['txt1']) && ctype_digit($_POST['txt1']) && strlen((string)($_POST['txt1']))==5)
{$int=$_POST['txt1'];
 if ($int==strrev((string)($int)))
  {echo "Palindrome";}
 else
  {echo "Not a palindrome";}
}
else
 {echo "Enter a 5 digit number";}
?>