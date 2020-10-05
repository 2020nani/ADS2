<?php 
class Pessoa{
    private $nome = 'hernani';
    private $idade= 23;
    private $peso = 80;

    public function crescer(){
        //chamando funcao comer qque por ser private so pode ser acessada na mesma classe
        $this->comer();
        echo '<br/>' .'estou crescendo';
    }
    private function comer(){
        echo 'estou comendo';
    }
}
//Instanciar
$pessoa = new Pessoa;
//chamando funcao crescer do objeto Pessoa
$pessoa->crescer();

?>