<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Mensagem</title>
</head>
<body>
<div class="w3-container w3-teal">
 <h1>
 <?php
 $valorCompra = (int) $_POST['txtValorCompra'];
 $Desconto = 0;
 echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO !"."<br>";
 echo "" .ucfirst ($_POST['txtNome'])." ! <br>";
 echo "Valor da compra sem desconto: R$" .$valorCompra." <br>";
 echo "Forma de pagamento escolhida: ".$_POST['cmbPag']. "<br>"
 ?>
 <?php
 if($_POST['cmbPag'] == "deposito")
 { 
    $Desconto=10;
    echo "Desconto de ".$Desconto."% <br>";
 }
 elseif($_POST['cmbPag'] == "boleto")
 {
     $Desconto=8;
    echo "Desconto de ".$Desconto."% <br>";
 }
 else
 {
    $Desconto=0;
    echo "Desconto de ".$Desconto."% <br>";
 }
 $valorEconomizado = (int) $valorCompra/100*$Desconto;
 $valorTotal = $valorCompra - $valorEconomizado;
 echo "Voce economizou: R$ ".$valorEconomizado. "<br>";
 echo "Valor a pagar: R$ " .$valorTotal;
 ?>
 </h1>
</div>
</body>
</html>