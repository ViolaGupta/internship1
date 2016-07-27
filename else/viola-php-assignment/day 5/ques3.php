<html>
<head></head>
<body>
<form method="post">
<input type="text" name="path">
<input type="submit" name="enter">
</form>
<?php
if(isset($_POST['enter'])){
$file=fopen($_POST['path'],"a+") or die("File doesn’t exist");
copy($file,"/Users/violagupta/desktop/newname.txt");
fclose($file);
}
?>
</body>
</html>