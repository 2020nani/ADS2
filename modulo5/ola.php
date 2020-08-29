<?php
echo "Hernani Almeida";
/*echo "36 anos";*/
echo "Developer </br>";
//declarando variavel
$nome = "Guilherme </br>";
echo $nome;
$nome = 'Joao </br>';
echo $nome;
//concatenar msgem com variavel
echo 'Meu nome e '.$nome;
//concatenar msgem com variavel usando ""
echo "Meu nome e $nome";
//arrays
$nomes = ['Hernani','marcelo','marcos'];
echo 'Array posicao 0 = ' .$nomes[0];
echo 'Array posicao 1 = ' .$nomes[1];
$informacao['nome'] = 'hernani';
$informacao['cidade'] = 'botucatu';
echo '<br/>';
echo $informacao['nome'];
echo '<br/>';
echo $informacao['cidade'];
echo '<br/>';
//condicionais
$number = 5;
if($number % 9 == 0){
    echo 'O numero e par';
}else{
    echo 'O numero nao e par';
}

?>

