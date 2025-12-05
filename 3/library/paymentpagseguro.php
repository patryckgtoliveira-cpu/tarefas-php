<?php

namespace app\libary;

class paymentpagseguro extends payment
{
    public function process()
    {
        return $this->value -= $this->tax *100;
    }



}

