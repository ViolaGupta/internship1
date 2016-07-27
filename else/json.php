<html>
<head></head>
<body>
<form method="post">
<input type="submit" value="show" name="show">
</form>
<?php
if(isset($_POST['show']))
    {/* $file= file_get_contents("/Users/violagupta/Desktop/public_html/web_services/api_folder/category_3_details.json"); echo start;
  $json=json_decode($file,true);
  foreach($json as $h->$a)
    {echo $h->$a;}*/
        $shipments = json_decode(file_get_contents("/Users/violagupta/Desktop/public_html/web_services/api_folder/category_3_details.json"), true);
        print_r($shipments);
}
?>
</body>
</html>