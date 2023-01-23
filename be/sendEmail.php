<?php

$to = "geral@webber.pt";
$subject = "Orçamento Webber para ".$_POST['nome'];

$message = "
<html>
<head>
<title>Pedido de Orçamento</title>
</head>
<body>
<h3>Pedido de Orçamento - ".$_POST['nome']."</h3>
<table>
<tr>
<th>Nome</th>
<th>Email</th>
<th>Descrição</th>
</tr>
<tr>
<td>".$_POST['nome']."</td>
<td>".$_POST['email']."</td>
<td>".$_POST['descricao']."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <orcamentos@webber.pt>' . "\r\n";

mail($to,$subject,$message,$headers);

header('location:../?sm='.base64_encode("Pedido enviado com sucesso!"));

?>