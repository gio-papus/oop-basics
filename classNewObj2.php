<?php
require_once("oop.php");
require_once("classObj.php");
class berry extends fruit{
    
    protected $value;
    function __construct(string $type,int $weight,int $price ){
        parent::__construct($type,$weight,$price);
    }
public function setValue(string $rate){
    $this->value=$rate;
}
public function getValue():string{
    return $this->value;
    }


}
    $obj2= new berry("Strawberry",200,4);
    
    $obj2-> setValue("10/10");
    
    echo $obj2->getInfo();
echo "Rate: {$obj2->getValue()}";
?>