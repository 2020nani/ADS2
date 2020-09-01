<?php
 
    $nome = $_POST['txtNome'];
    $sobrenome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $emprego = $_POST['txtEmprego'];
    echo '<div 
    style="background-color:teal; 
    width:35vw;
    margin-left:31vw;
    margin-top:30vh;
    padding:1px 4px 4px;
    color:white;
     "><h1>Cadastro Confirmado com Sucesso</h1><div/>';
    echo 'Nome: ' .$nome .'<br/>'; 
    echo 'Sobrenome: ' .$sobrenome .'<br/>';
    echo 'Email: ' .$email .'<br/>';
    echo 'Formacao: ' .$formacao .'<br/>';
    echo 'Descrição do ultimo emprego: ' .$emprego .'<br/>';
    
 
?>