<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getpost</title>
</head>
<body>
    <?php
    if(isset($_GET['acao'])){
    $nome = $_GET['Nome'];
    $email = $_GET['Email'];
    echo 'Seja Bem vindo ' .$nome .'<hr/>'; 
    echo 'Seu email e este ' .$email .'<hr/>';
    }
    ?>
    <form action="">
    <input type="text" name="Nome"/>
    <input type="text" name="Email" />
    <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>