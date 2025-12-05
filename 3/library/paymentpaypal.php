<?php

namespace pp\libary;
class paymentpaypal extends payment
{
    public function process()
    {
            throw new \excepton('method process()is not implemented'); 
    // caso queira  gera diferente  tem que coloca return $this->value -= $this->tax *100;
    // e mudar os numeros no index.php e o nome do banco       
    }
}