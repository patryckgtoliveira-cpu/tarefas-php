<?php

   namespace app\libary;

    abstract class payment
    {
        protected int|float $tax = 0;
        protected int|float $value = 0;

        public function settax($tax)
        {
            $this->tax = $tax;
        }

        public function setvalue($value)
        {
            $this->value = $value;
        }
   
   

    abstract public function process(); //implimentção nas classes filhas 

    }
?>