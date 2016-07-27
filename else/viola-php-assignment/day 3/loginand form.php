<html>
<head><title>day3</title></head>
<body>
<form method="POST">
Enter UserName:
<input type="text" name="nam"><br>
Enter Password:
<input type="text" name="pass"><br>

<input type="submit"><br>
</form>
<?php
if($_POST['nam']=="robert" && $_POST['pass']=="hello" && isset($_POST['nam']) && !empty($_POST['nam']) )
 {$v1=$_POST['nam']; $v2=$_POST['pass'];
echo "
<table border=1>
<tr>
<td>UserName</td>
<td>Password</td>
</tr>
<tr>
<td>$v1</td>
<td>$v2</td>
</tr>
</table>
";}
else
{echo "Invalid ID or Password";}
?>
</body>
</html>