<?php

// criando uma variavel local para receber os dados do formulario
$formulario = $_POST['formulario'];
$name = $_POST['nome'];
$email = $_POST['formEmail'];
$fone = $_POST['tel'];

echo ' formulario: ' . $formulario;
echo '<br>'
echo ' nome: ' . $name;
echo '<br>'
echo ' E-mail: ' . $email;
echo '<br>'
echo ' telefone: ' . $fone;
?>