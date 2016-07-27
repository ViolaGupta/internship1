mysql=>
CREATE TABLE Employee(employee_id varchar(40),employee_name varchar(50), street varchar(20), city varchar(20), bank_name varchar(30), salary int);

<html>
<head><title>Table and Database</title>
$host='localhosat'
$user='root'
$password=''
$dbname=''
$link=@mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_errno())
{ echo mysqli_connect_error();
  exit();
}

</head>
<body>
if(isset($_POST['btndisplay']))
{$qry="select * from Employee";
 $result=@mysqli_query($link,$qry) or die(mysli_error($link));
echo "<table border=2px>";
echo "<tr><td>;
while($row=mysqli_fetch_array($result,MYSQL_ASSOC)";
echo "<tr><td>$row[employee_id]</td>";
</table>
}

<form method="post">
<table border="1">
<tr><td>Employee_id</td><td>Employee_name</td><td>street</td><td>city</td><td>bank_name</td><td>salary</td>
</tr>
<tr><td><input type="text" name="id"/></td><td><input type="text" name="name"/></td><td><input type="text" name="street"/></td><td><input type="text" name="city"/></td><td><input type="text" name="bank"/></td><td><input type="text" name="salary"/></td>
</tr>
</table>
<input type="submit" name="btndisplay" value="display"/>
<input type="submit" name="btninsert" value="insert"/>
<input type="submit" name="btnupdate" value="update"/>
<input type="submit" name="btndelete" value="delete"/>
</form>

<?php
if(isset($_POST["btninsert"]))
{ $id = $_POST['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$bank = $_POST['bank'];
$salary = $_POST['salary'];
$insertqry="insert into Employee value('$id','$name','$street','$city','bank','salary')";
@mysqli_query($link,$insertqry) or die(mysql_error($link));
echo "employee details saved successfully";
}
if(isset($_POST["btnupdate"]))
{ $id = $_POST['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$bank = $_POST['bank'];
$salary = $_POST['salary'];
$insertqry="insert into Employee value('$id','$name','$street','$city','bank','salary') where employee_id="$_POST['id']"";
@mysqli_query($link,$insertqry) or die(mysql_error($link));
echo "employee details updated successfully";
}

if(isset($_POST["btndelete"]))
{ $id = $_POST['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$bank = $_POST['bank'];
$salary = $_POST['salary'];
$insertqry="DELETE FROM Employee  where employee_id="$_POST['id']"";
@mysqli_query($link,$insertqry) or die(mysql_error($link));
echo "employee details deleted successfully";
}
?>
</body>
</html>