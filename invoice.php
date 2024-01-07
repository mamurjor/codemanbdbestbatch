<?php 


//  echo $_GET['price'];
// echo $_GET['qty'];

// exit();
// $_COOKIE
// $_SERVER
// $_SESSION
// $_REQUEST
// super Global Variable 


require("codemanbd.php");

$qty = $_POST['qty'];
$price =$_POST['price'];
 $newclass = new Becomeaphp();
 $newclass->setprice($price,$qty);
$total_price = $newclass->priceCal();
header("location: invoiceform.php?msg=sucess & totalprice=".$total_price);



?>