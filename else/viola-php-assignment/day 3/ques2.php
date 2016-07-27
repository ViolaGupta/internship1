<html>
<head><title>day3</title></head>
<body>
<?php
echo "<table>
<tr>
 <td>Number</td>
<td>Square</td>
<td>Cube</td>
</tr>";
    for($i=0;$i<=10;$i++)
    {echo "<tr>
      <td> $i</td>
      <td>".$i*$i."</td>
      <td>".$i*$i*$i."</td>
      </tr>";
    }
echo "</table/>
    ";
?>
</body>
</html>