<?php
session_start();

$valorEmprestimo = $_POST['valor'];
$numParcelas = $_POST['prazo'];

$taxaCET = 3.02 / 100;

$_SESSION['valorEmprestimo'] = $valorEmprestimo;
$_SESSION['prazo'] = $numParcelas;
$_SESSION['taxaCET'] = str_replace('.', ',', $taxaCET * 100);

$valorEmprestimo = str_replace('.', '', $valorEmprestimo);
$valorEmprestimo = str_replace(',', '.', $valorEmprestimo);

$valorParcela = $valorEmprestimo * ($taxaCET / (1 - (1 / (1 + $taxaCET) ** $numParcelas)));
$valorTotal = $valorParcela * $numParcelas;

$valorParcela = number_format($valorParcela,2,",",".");  
$_SESSION['valorParcela'] = $valorParcela;
$_SESSION['valorTotal'] = number_format($valorTotal,2,",","."); 

echo json_encode(['code'=>200, 'parcela'=>$valorParcela]);