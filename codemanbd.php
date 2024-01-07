<?php 



class Becomeaphp{
// public , private,protectd // Access Modifier 
public   $price;
public   $qty;

public function setprice($price,$qty){
    $this->price=$price;
    $this->qty=$qty;

}

public function priceCal(){
    $total =  $this->price*$this->qty;
    return $total;
}


public $name;


    function Setinfo($name){
        
        $this->name = $name;

    }
    function Getinfo(){
           
        return  $this->name;
    }  
        
}


?>