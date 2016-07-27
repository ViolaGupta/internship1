<html>
<head></head>
<body>
<form method="post">
<input type="text" name="path">
<input type="submit" name="enter">
<input type="textarea">
<?php
if(isset($_POST['enter']))
{$file=fopen($_POST['path'],"a+") or die("File doesn’t exist");
echo file_get_contents($file);
fclose($file);
}
?>
</textarea>
</form>
</body>
</html>