
<html>
<head><title>day1</title></head>
<body>
<form method="GET">
Enter an Integer:
<input type="text" name="txt1">
<input type="submit"/><br>
</form>
</body>
</html>
<?php
echo nl2br("\"Hello\"\n"); 
echo nl2br("'Hello'\n"); 
echo nl2br("\$Hello\$\n"); 

    if(isset($_GET['txt1']) && !empty($_GET['txt1']) && ctype_digit($_GET['txt1']))
    { $int =$_GET['txt1'];
        switch($int){
            case 1:
                echo "Monday"; break;
            case 2:
                echo "Tuesday"; break;
            case 3:
                echo "Wednesday"; break;
            case 4:
                echo "Thursday";break;
            case 5:
                echo "Friday"; break;
            case 6:
                echo "Staurday"; break;
            case 7:
                echo "Sunday"; break;
            default:
                echo "Enter a number between 1 to 7"; break;
        }
    }

?>