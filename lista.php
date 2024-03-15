<?php

$inserindoDados = true;
$convidados = [];

$caminho = readline("Digite o endereço onde o arquivo será gravado juntamente com o nome do arquivo. Exemplo (C://texto.txt): " );

while($inserindoDados){
    $novoItens = readline("Digite o nome dos convidados: \n");

    if($novoItens == ""){
        $inserindoDados = false;
    }

    $convidados[0] = "----------------Lista de Convidados----------------";

    $convidados[] = $novoItens;
}

$dados = implode("\n", $convidados);

file_put_contents($caminho, $dados);

do{
    $escolha = intval(readline("Você deseja ler o arquivo que acabou de criar? Digite '1' para ler e '0' para acabar agora o programa. "));

    if($escolha == 1){
        echo file_get_contents($caminho);
    }

}while($escolha != 0);