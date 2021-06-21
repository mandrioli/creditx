<?php
$valorEmprestimo = $_POST['valor'];
$numParcelas = $_POST['prazo'];
$valorEmprestimo = str_replace('.', '', $valorEmprestimo);
$valorEmprestimo = str_replace(',', '.', $valorEmprestimo);
$taxaCET = 3.02 / 100;

/*
n = Nº de Meses
j = Taxa de Juros Mensal
p = Valor da Prestação
q0 = Valor Financiado
Fórmula q0=(((1-(1+j)^-n))/j)*p
*/

$valorParcela = $valorEmprestimo * ($taxaCET / (1 - (1 / (1 + $taxaCET) ** $numParcelas)));
$valorParcela = number_format($valorParcela,2,",",".");  
echo json_encode(['code'=>200, 'parcela'=>$valorParcela]);