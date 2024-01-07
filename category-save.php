<?php

$name = $_POST['name'];
$code =$_POST['code'];


$conn=mysqli_connect("localhost","root","","bestbatch");


// boolien (true/false)
if($conn==true){   
    $query = "INSERT INTO category (name,code,image)
    VALUES ('$name','$code','test')";
    // var_dump($query);
    // exit();
    $sql=mysqli_query($conn,$query);

    if($sql){
        echo "Done";
      // header("location: login.php?msg=sucess ");
    }
    else{
        echo "Sorry";
       // header("location: registration.php?msg=entry hoi nai");
    }
}
else{
    echo "Sorry";
}

?>