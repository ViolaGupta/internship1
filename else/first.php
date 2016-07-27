<html>
<head>
<form method="post">
ID
<input type="text" name="id"> <br>
Password
<input type="text" name="pass"><br>
<input type="submit" name="signup" value="signup">
<input type="submit" name="login" value="login">
</form>
<?php
$host=localhost;
$user=root;
$Password=root;
$dbname=back;
$link=@mysqli_connect($host,$user,$Password,$dbname);
if(mysqli_connect_errno())
{ echo mysqli_connect_error();
  exit();
}
//Connected successfully

?>
</head>
<body>
<?php
$id_string=$_POST['id'];
$password=$_POST['pass'];
if(isset($_POST['signup']))
{ $insertqry="insert into login values('$id_string','$password')";
  @mysqli_query($link,$insertqry) or die(mysql_error($link));
}
elseif(isset($_POST['login']))
{ $result=" select id,pass from login where id='$id_string' and pass='$password;";
  if($result==true)
  { header("Location: Nextpage.php");
  	echo "Account exists";
    while($row=mysqli_fetch_row($result))
     { echo $row['id']."\n".$row['pass'];
      } 
  }
 else
 	{echo "No such account!";}
}
?>
</body>
</html>