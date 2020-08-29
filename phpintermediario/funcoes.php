<?php
  // php.documentation para ver funcoes nativas php
  function mostrarNome(){
      echo "hernani";
      echo '<hr/>';
  }
  function mostrarNome2($nome,$idade){
    echo "Nome e $nome e idade = $idade";
}
function mostrarNome3(){
    return 'Mario';
}
mostrarNome();
mostrarNome2('Claudio',20);
echo '<hr/>' .mostrarNome3()
?>