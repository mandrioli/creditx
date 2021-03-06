<?php
session_start();
$valorEmprestimo = isset($_SESSION['valorEmprestimo']) ? $_SESSION['valorEmprestimo'] : null;
$prazo = isset($_SESSION['prazo']) ? $_SESSION['prazo'] : null;
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
            <a class="navbar-brand" href="#">
                <h3>CréditoParaTodxs</h3>
            </a>
        </div>
    </nav>

    <div class="container my-5">

        <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12">
                <label class="visually-hidden2" for="valor">Valor</label>
                <div class="input-group">
                    <div class="input-group-text">R$</div>
                    <input type="text" class="form-control" id="valor" name="valor" value="<?=$valorEmprestimo?>" onkeypress="$(this).mask('#.##0,00', {reverse: true});">
                </div>
            </div>
            <div class="col-12">
                <label class="visually-hidden2" for="prazo">Prazo</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="prazo" name="prazo" value="<?=$prazo?>">
                    <div class="input-group-text">meses</div>
                </div>
            </div>

            <div class="col-12 align-self-end">
                <button type="submit" class="btn btn-primary" id="btn-simulacao">Fazer Simulação</button>
            </div>
        </form>

    </div>

    <div class="container mb-5" id="resultadoSimulacao" style="display: none;">

        <h5>Ofertas de crédito que correspondem a sua busca.</h5>

        <div class="card mb-3">
            <h5 class="card-header">Oferta 1</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-auto">
                        <span>Valor emprestado</span>
                        <p class="card-text" valor><strong>R$ 2.000,00</strong></p>
                    </div>
                    <div class="col col-md-auto mx-4">
                        <span>Parcelas</span>
                        <p class="card-text" parcela><strong>12x de R$ 201,50</strong></p>
                    </div>
                    <div class="col col-md-auto" cet>
                        <span">CET • Custo Efetivo Total</span>
                            <p class="card-text"><strong> 3,02% ao mês </strong></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        > <a href="oferta-detalhe.php">Detalhes</a>
                    </div>
                    <div class="col">
                        <a href="oferta-revisao.php" class="btn btn-primary">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="app.js"></script>
</body>

</html>