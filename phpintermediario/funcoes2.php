<?php 
//usando casos da funcao switch
$nome = 'hernani';
switch($nome){
    case 'hernani';
    echo 'Minha variavel e hernani';
break;
case 'Joao';
echo 'Minha variavel e joao';
break;
}
//usando continue nao mostrara os dados da verificacao
for($i = 0; $i<10; $i++){
    if($i == 5 || $i==6){
        continue;
    }
    echo '<hr/>' .'Estamos no passo ' .$i;
};
//funcoes manipular arrays
//merge uni arrays
$array1 = array("cor" => "vermelho", 2, 4);
$array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
$result = array_merge($array1, $array2);
echo '<hr/>';
print_r($result);
echo '<hr/>';
//array intersect_key serve para retornar valores com a mesma chave em 2 ou mais arrays 
$array3 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array4 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array3, $array4));
echo '<hr/>';
//Aplica uma função em todos os elementos dos arrays dados
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
echo '<hr/>';
//outro exemplo array_map
$arr = ['<h1>hernani</h1>','<h1>mario</h1>','marcos'];
print_r($arr);
echo '<hr/> ';
print_r(array_map('strip_tags',$arr))

?>