<?php   
    /**
     * 1 saber o nome do arquivo
     * 2 saber o modo de abertura
     * 3 abrir o arquivo
     * 4 seu aqruivo foi aberto com sucesso?
     * 5 adc conteudo ao arquivo
     * 6 fechar o arquivo
     */
    $_nome = './arquivo.txt'; 
    $_modoArbertura = 'w';
    $_handle = fopen($_nome,"w");
    if ($_handle){
       fwrite($_handle,"hello world");
       fclose($_handle); 
    }
    ?>