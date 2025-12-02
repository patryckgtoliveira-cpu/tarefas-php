<?php   
    /**
     * 1 saber o nome do arquivo
     * 2 saber o modo de abertura
     * 3 abrir o arquivo
     * 4 seu aqruivo foi aberto com sucesso?
     * 5 ler o conteudo
     * 
     * 5.5 printar o conteudo
     * 6 fechar o arquivo
     */
    $_nome = './arquivo.txt'; 
    $_modoAbertura = 'r';
    $_handle = fopen($_nome,$_modoAbertura);
    if ($_handle){
        $tamanho = filesize($_nome);
        if ($tamanho){
            $conteudo = fread($_handle,$tamanho);
            echo $conteudo;
        }
        fclose($_handle); 
    }
    ?>
    