<html>
<head></head>
<body>
<form method="post">
<input type="text" name="path">
<input type="submit" name="enter">
</form>
<?php
if(isset($_POST['enter'])){
$file=fopen($_POST['path'],"r+") or die("File doesn’t exist");
$words=str_word_count($file);
$char=count_chars($file,1);
echo "No. of words: ".$words."<br>"."No. of characters: ".$char;
fclose($file);
}
?>
</body>
</html>