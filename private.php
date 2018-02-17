<?php
# carrega a classe
include_once 'funcionario.php' ;

// instancia novo Funcionário
$pedro = new Funcionario;

// atribui novo salário
$pedro->setSalario(876) ;
// obtém o Salário
echo 'Salário : (R$) ' . $pedro->getSalario();
?>