<?php
require_once("Pessoa.class.php");
$pessoa = new Pessoa;
$pessoa->setNome("Thiago Cruz Machado");
echo $pessoa->getNome();

?>