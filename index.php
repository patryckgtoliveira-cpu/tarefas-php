<?php
session_start();

if(!isset($_SESSION['login'])){ 
  
        
    if(isset($_POST['acao'])){
        $login = 'patryck'; 
        $senha = '12345'; 

        $loginform = $_POST['login'];
        $senhaform = $_POST['senha'];

        if($login == $loginform && $senha == $senhaform){
            //logado com sucesso  //posso colocar login no session , tambem funciona 
            $_SESSION['login'] = true;
            header ('location: index.php');
        }else{
            //algum erro ocorreu
            echo 'dados invalidos.';
        }
    }
    

    include('login.php');
}else{
    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        header('location: index.php');
    }
    include('home.php');
}

?>