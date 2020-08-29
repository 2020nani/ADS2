<?php
// foreach e for para arrays
$arr  = ['Hernani', 'Marcos', 'Paulo'];
foreach($arr as $key => $value){
echo $key;
echo ' => ';
echo $value;
echo '<hr>';
};
//funcao para achar tamanho do array count()
$total = count($arr);
echo "O tamanho do array e = $total"
?>