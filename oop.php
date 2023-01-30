<?php

class fruit{
        public $strType;
        private $intWeight;
        public $intPrice;
  
    
    public function __construct(string $type,int $weight,int $price ){
        
        $this->strType=$type;
        $this->intWeight=$weight;
        $this->intPrice=$price;
    }

   public function getInfo(){
       $info= "<h2 style=text-align:center>Product<br><hr>
type:{$this->strType}<br>
inStock:{$this->intWeight} kg<br>
price for kilo:{$this->intPrice}$<br>";
        return $info;
    }







}


?>