<html>
<head>Hey
<?php
$host='localhost';
$user='root';
$password='root';
$dbname='back';
$link=@mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_errno())
{ echo mysqli_connect_error();
    exit();
}

echo "connected successfully";
?>
</head>
<body>
<form method="POST">
<input type="text" name="box1">
<input type="submit" name="sub">
</form>
</body>
<?php
    if(isset($_POST['sub']))
    { $bor=$_POST['box1'];
        
        $query ="INSERT INTO fin(id)
        VALUES ('$bor');";
        $query .="select * from fin;";
        echo $query;
       // $query="Create table tabu(id varchar(40)); INSERT INTO tabu(id)
        //VALUES ('$bor'); select * from tabu";
        @mysqli_multi_query($link,$query) or die(mysqli_error($link));
    }
    
    mysqli_close($link);
    ?>
</html>