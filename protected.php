<?php
# carrega as classes
include_once 'funcionario.php' ;
include 'estagiario.php';

$pedrinho = new Estagiario();
$pedrinho->setSalario(248);

echo 'O Salário do Pedrinho é R$: ' . $pedrinho->getSalario() . "\n";

?>