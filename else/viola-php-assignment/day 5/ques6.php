<html>
<head><title>Text file</title>

</head>
<body>
$text=fopen("/Users/violagupta/Desktop/myfile.txt","a+") or die("Unable to open file!");
if(isset($_POST['btndisplay']))
{$dis=file_get_contents("/Users/violagupta/Desktop/myfile.txt");
 
    echo $dis;
    readfile($text);

}
<form method="post">
<table border="1">
<tr><td>Employee_id</td><td>Employee_name</td><td>class</td><td>Grade</td><td>Address</td>
</tr>
<tr><td><input type="text" name="id"/></td><td><input type="text" name="name"/></td><td><input type="text" name="class"/></td><td><input type="text" name="grade"/></td><td><input type="textarea" name="address"></taxtarea></td>
</tr>
</table>
<input type="submit" name="btndisplay" value="display"/>
<input type="submit" name="btninsert" value="insert"/>


</form>
<?php
if(isset($_POST["btninsert"]))
{ $id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$grade = $_POST['grade'];
$address = $_POST['address'];

$arr=array($id,$name,$class,$grade,$address);
fwrite($text,$arr);
echo "employee details saved successfully";
}
fclose($text);
?>
</body>
</html>
