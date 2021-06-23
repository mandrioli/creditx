<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CréditoParaTodxs</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h3>CréditoParaTodxs</h3>
            </a>
        </div>
    </nav>

    <div class="container my-4">
        <h5>Detalhes da oferta</h5>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <span class="text-muted">Total do empréstimo</span>
                        <p class="card-text"><strong>R$ <?=$_SESSION['valorEmprestimo']?></strong></p>

                        <span class="text-muted">Total de parcelas</span>
                        <p class="card-text"><strong><?=$_SESSION['prazo']?></strong></p>

                        <span class="text-muted">Valor das parcelas</span>
                        <p class="card-text"><strong>R$ <?=$_SESSION['valorParcela']?></strong></p>

                        <span class="text-muted">Total a pagar</span>
                        <p class="card-text"><strong>R$ <?=$_SESSION['valorTotal']?></strong></p>

                        <span class="text-muted">CET</span>
                        <p class="card-text"><strong>Taxa média <?=$_SESSION['taxaCET']?>% (ao mês) e 43,69% (ao ano)</strong></p>

                        <span class="text-muted">Juros</span>
                        <p class="card-text"><strong>Taxa média 2,68% (ao mês) e 37,35% (ao ano)</strong></p>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Oferta 1</h5>

                        <span class="text-muted">Total do empréstimo</span>
                        <p class="card-text"><strong>R$ <?=$_SESSION['valorEmprestimo']?></strong></p>

                        <span class="text-muted">Parcelas</span>
                        <p class="card-text"><strong><?=$_SESSION['prazo']?>x de R$ <?=$_SESSION['valorParcela']?></strong></p>

                        <span class="text-muted">CET - Custo Efetivo Total</span>
                        <p class="card-text"><strong>Taxa média <?=$_SESSION['taxaCET']?>% ao mês</strong></p>

                        <a href="oferta-revisao.php" class="btn btn-primary mt-2">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>