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
echo '<hr/>' .mostrarNome3();
//funcoes nativas
//trabalhar com datas
date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y H:i:s');
echo '<hr/>' .$data;
//adicionar segundos a data atual
$data2 = date('d/m/Y H:i:s', time()+(60*240));
echo '<hr/>' .'Hora adicionada = ' .$data2;
echo '<hr/>';
//incluir arquivos
$titulodosite = 'Testes';
include('header.php');
?>
<h1>Bom dia</h1>
<?php
include('footer.php');
//funcoes strings
//pesquisar strings manipulation php
$conteudo = 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum';
//retornar as 20 primeiras letras da string
echo '<hr/>' .substr($conteudo,0,20);
//corta a string transformando a em array
$nome = 'Hernani Amancio de Almeida';
$nomes = explode(' ',$nome);
echo '<hr/>' .'String transformada em array = ';

print_r( $nomes);
//junta o array
$nomes = implode(' ',$nomes);
echo '<hr/>' .'Array transformado em string = ' .$nomes;
//strip-tags retira html
$content = '<h1>hello world</h1>';
echo '<hr/> Com strip_tags = ' .strip_tags($content);
echo '<hr/> Sem strip_tags = ' .$content ;
//html entities que mostra o codigo html na pagina
echo htmlentities('<div></div>');


?>