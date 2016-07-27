<html>
<head></head>
<body>
<form method="post">
<select>
<option value></option>
<option value="size"></option>
<option value="copy"></option>
<option value="delete"></option>
</select>
<input type="submit" name="enter"/>
</form>
<?php
$file=fopen("/Users/violagupta/Desktop/myfile.txt","a+") or die("Unable to open file!");
if(isset($_POST['enter']))
    {
if(isset($_POST['size']))
{ echo "name:".$_FILES[$file]['size']; }
if(isset($_POST['copy']))
{copy($file,"/Users/violagupta/Desktop/newfile.txt");}
if(isset($_POST['delete']))
{unlink($file);}
fclose($file);
    }
?>
</body>
</html>