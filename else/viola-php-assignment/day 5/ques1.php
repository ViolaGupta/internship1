<html>
<head>
<form method="post" enctype="multipart/form-data">
<input type="file" name="datafile"/>
<input type="submit" name="count" value="count" />
<input type="submit" name="upload" value="upload" />
</form>
<?php
 echo "start";
if(isset($_POST['count']))
    {  $text=file_get_contents($_FILES['datafile']); readfile($_FILES['datafile']); echo "start";
        $t=substr_count($_FILES['datafile'],"word");
        echo substr_count($_FILES['datafile'],"word"); }
    
if( isset($_POST['upload']))
    { if($_FILES['datafile']['error'])
     { $source=$_FILES['datafile']['name'];
        $des="/desktop/new".$_FILE['myfile']['name'];
        move_file_upload($source,$des);
        
    }
        
    }

?>
</head>
</html>