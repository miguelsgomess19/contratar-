<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

function processarAdmissao(FuncionarioInterface $funcionario): void
{
    echo $funcionario->contratar() . "\n";
}

function processarDesligamento(FuncionarioInterface $funcionario): void
{
    echo $funcionario->demitir() . "\n";
}

$clt = new FuncionarioCLT("Murillo Cena", "123456-SP");
$pj = new FuncionarioPJ("Miguel Gomes", "12.345.678/0001-99");

echo "ADMISSÕES\n";
processarAdmissao($clt);
processarAdmissao($pj);

echo "\nDESLIGAMENTOS\n";
processarDesligamento($clt);
processarDesligamento($pj);
?>