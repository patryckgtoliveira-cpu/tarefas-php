<?php 

require '../3/abstrata.php';

use app\database\models\post;
use app\database\models\user;
use app\library\payment;

$payment = new paymentpagseguro;
$payment->settax(0.5);
$payment->setvalue(100);
var_dump($payment->process());




//$post = new post;
//$post->select();

//$user = new user;

//utiliza quando estiver uma familia de classes 

//$user->hash_update();
