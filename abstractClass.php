<?php

abstract class cola{

    public $valor;
    public $cantidad;
    
public function __construct($valor,$cantidad){
    $this->valor=$valor ; 
    $this->cantidad=$cantidad;
    
}


public function print(){
   $i= "
   <h2 style=text-align:center>Almacen<hr>
   Cost of soda:{$this->valor}$ <br>
   Cantity: {$this->cantidad}<br>
   Brand:Pepshi<h2>";
   return $i;
}

}

class implemento extends cola{
    public $marca;
  public  function __construct(int $valor,int $cantidad,string $marca){
        parent::__construct($valor,$cantidad);
        $this->marca=$marca;
}
 }
$cocacola=new implemento(3,500,"Pepsi");
echo $cocacola->print();