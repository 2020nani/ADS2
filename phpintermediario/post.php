<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getpost</title>
</head>
<body>
    <?php
    if(isset($_POST['acao'])){
    $nome = $_POST['Nome'];
    $nome1 = $_POST['nome1'];
    $email = $_POST['Email'];
    echo 'Seja Bem vindo ' .$nome .'<hr/>'; 
    echo 'Seja Bem vindo ' .$nome1 .'<hr/>'; 
    echo 'Seu email e este ' .$email .'<hr/>';
    foreach($_POST['valor'] as $key =>$value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<br/>';
    }
    }
    ?>
    <form method="post">
    <input type="text" name="Nome"/>
    <input type="text" name="Email" />
    <select name="nome1" id="">
       <option value="Hernani">Hernani</option> 
       <option value="joao">joao</option>
    </select>
    <!--reornar varios valores escolhidos-->
    <input type="checkbox" name="valor[]" value="10" />10
    <input type="checkbox" name="valor[]" value="20" />20
    <input type="checkbox" name="valor[]" value="30" />30
    <input type="checkbox" name="valor[]" value="40" />40
    <input type="checkbox" name="valor[]" value="50" />50
    <input type="submit" name="acao" value="Enviar" />
    </form>
    
</body>
</html>