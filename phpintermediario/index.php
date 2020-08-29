<?php
// foreach e for para arrays
$arr  = ['Hernani', 'mario', 'Paulo'];
foreach($arr as $key => $value){
echo $key;
echo ' => ';
echo $value;
echo '<hr>';
};
//funcao para achar tamanho do array count()
$total = count($arr);
echo "O tamanho do array e = $total";
echo '<hr/>';
//arrays multidemensionais
$arr2 = [['nani','Marcos'],[23,45]];
echo 'Nome = ' .$arr2[0][0] .' Idade = ' .$arr2[1][0];
echo '<hr/>';
//funcao Die e sleep
// sleep codigo demora o tanto de segundos definido na funcao
sleep(3);
echo 'Ola';
echo '<hr/>';
if(1 == 1){
    echo 'tudo certo';
    echo '<hr/>';
}else{
    die("O script parou de ser executado");
}
echo 'Script esta continuando';    
?>