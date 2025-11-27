<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['LOGIN'])){

            if(isset($_session['login']))
                
                if(isset(@_post['acao'])){
                    $login = 'patryck'; 
                    $senha = '12345' 

                    $loginform = $_post['login'];
                    $senhaform = $_post['senha'];

                    if($login == $loginform && $senha == $senhaform){
                        //logado com sucesso  //posso colocar login no session , tambem funciona 
                        $_session['loghin'] = true;
                        header ('location: index.php');
                    }else{
                        //algum erro ocorreu
                        echo 'dados invalidos.';
                    }
                }
            

            include('login.php');
        }else{
            if(isset($_get['logout'])){
                unset($_session['login']);
                header('location: index.php');
            }
            include('home.php');
        }
    
    ?>

</body>
</html>