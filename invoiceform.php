<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>

<?php 

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}


?>
</h1>
<form action="invoice.php" method="post" >

<label for="price">Product Price </label>
<input type="text" name="price"> </br>

<label for="qty">Product Qty</label>
<input type="text" name="qty">
<input type="submit" value="save">
</form>

<h1> Total Price 
    <?php
    if(isset($_GET['totalprice'])){
        echo $_GET['totalprice'];
    }
    
    ?>
</h1>
</body>
</html>