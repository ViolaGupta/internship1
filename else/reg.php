<head>
<style>
table{
width:70%;
margin: auto;
border:2px solid red;
border-collapse: collapse;
}
table td{
border: 2px solid black;
border-collapse: collapse;
}
</style>
</head>
<?php
$host='localhosat'
$user='root'
$password=''
$dbname=''
$link=@mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_errno())
{ echo mysqli_connect_error();
  exit();
}
//Connected successfully

// for search button
if(isset($_POST['btnsearch']))
{ if(!empty($_POST['txtid']))
  { $id=$_POST[’txtid’];
    $searchqry="search * from mp_master where emp_id='$id’";
    $result=@mysqli_query($link,$searchqry) or die(mysqli_error($link));
    if($row=mysqli_fetch_row($result))
     {
      }
   }
else
{echo "<script></script>"}
}
?>
<form method="post">
<h2 align="center">DML AND selection using PHP with MYSQL</h2>
<hr color="red"/>
<table>
<tr>
<td>EMPLOYEE ID</td><td><input type="text" name="txtid" 
value="<?php if(isset($row))echo $row[0]; ?>"/></td>
</tr>
<tr>
<td>EMPLOYEE ID</td><td><input type="text" name="txtid" 
value="<?php if(isset($row))echo $row[0]; ?>"/></td>
</tr>
<tr>
<td>EMPLOYEE age</td><td><input type="text" name="txtage"
value="<?php if(isset($row))echo $row[1]; ?>" /></td>
</tr>

<tr>
<td>EMPLOYEE address</td><td><input type="textarea" name="txtaddress" cols="18" rows="6"></textarea></td>
</tr>
<tr>
<td><input type="sumbit" value="save employee" name="btninsert"/>
<td><input type="sumbit" value="update employee" name="btnupdate"/>
<td><input type="sumbit" value="delete employee" name="btndelete"/>
<td><input type="sumbit" value="search employee" name="btnsearch"/>
<td><input type="sumbit" value="view all" name="btnview"/>
</tr>
</table>

<?php
if(isset($_POST["btninsert"]))
{ $id=$_POST['txtid']
$name=$_POST['txtname']
$age=$_POST['txtage']
$address=$_POST['txtaddress']
$insertqry="insert into emp_master value('$id','$name','$age','$address')";
@mysqli_query($link,$insertqry) or die(mysql_error($link));
echo "employee details saved successfully";
}

elseif(isset($_POST["btnupdate"]))
{ $id=$_POST['txtid']
$name=$_POST['txtname']
$age=$_POST['txtage']
$address=$_POST['txtaddress']
$updateqry="update emp_master set emp_name='$name', emp_age='$age', emp_address='$address' where emp_id='$id'";
@mysqli_query($link,$updateqry) or die(mysql_error($link));
echo "employee details updated successfully";
}

elseif(isset($_POST["btndelete"]))
{ $id=$_POST['txtid']

$deleteqry="delete from emp_master  where emp_id='$id'";
@mysqli_query($link,$deleteqry) or die(mysql_error($link));
if(mysqli_affected_rows($link)>0)
 {
  echo "employee details updated successfully";
 }
else
  echo "No such Employee exists";
}

?>