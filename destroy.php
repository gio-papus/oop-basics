<?php
class ex{
public $name;
    public $chipset;
    public $internalMemory;
        public function __construct($name, $chipset, $internalMemory)
        {
            
            $this->name = $name;
            $this->chipset = $chipset;
            $this->internalMemory = $internalMemory;
           
        }
        function __destruct()
        {
            $this->name ;
             $this->chipset ; $this->internalMemory ;
        }
    }