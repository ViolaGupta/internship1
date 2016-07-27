<html>
<head><title>day3</title></head>
<body>
<form method="POST">
Enter bill number:
<input type="text" name="bill"><br>
Enter name:
<input type="text" name="nam"><br>
Enter quantity:
<input type="text" name="quan"><br>
Enter price of item:
<input type="text" name="price">
<input type="submit"><br>
</form>
<?php
    $v1=$_POST['bill']; $v2=$_POST['nam']; $v3=$_POST['quan']; $v4=$_POST['price']; $v5=$_POST['quan']*$_POST['price']; $i=0;
echo "
<table border=1> 
<tr>
<td>Bill Number:</td>
<td>Name:</td>
<td>Quantity</td>
<td>Price</td>
<td>Total Bill Amount</td>
</tr>
<tr>
<td>$v1</td>
<td>$v2</td>
<td>$v3</td>
<td>$v4</td>
<td>$v5</td>
</tr>
</table>
";
echo "<br><br>";
    
?>
</body>
</html>

