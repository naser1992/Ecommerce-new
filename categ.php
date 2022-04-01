<?php
    include './admin/cmsAdmin/function.php';
    $post = new posts();
    $gete = $post->getCateg($_GET['id']);
    foreach($gete as $get){
        print_r($get['prod_name']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p>
</body>
</html>