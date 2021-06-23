<?php
session_start();
session_destroy();
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
        <h5>Solicitação finalizada</h5>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body p-5 text-center">

                        <h5 class="card-header text-center">Parabéns, sua oferta foi confirmada!</h5>

                        <a href="index.php" class="btn btn-primary mt-5">Voltar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>