<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login com Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Primeira linha -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Segunda linha: -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 25rem;">
                    <div class="card-body">
                        <br>
                        <h3 class="card-title">Olá, seja bem-vindo(a)!</h3><br>

                        <?php

                        if (isset($_COOKIE['email'])) {
                            $cookie_email = $_COOKIE['email'];
                            echo "<b>E-mail:</b> $cookie_email<br>";

                            if (isset($_COOKIE['senha'])) {
                                $cookie_password = $_COOKIE['senha'];
                                echo "<b>Senha:</b> $cookie_password";
                            } else {
                                echo "Senha não disponível";
                            }
                        } 
                        
                        else {
                            echo "Cookies não encontrados.";
                        }
                        ?>

                        <br><br><a href="login.php" class="btn btn-primary">Voltar</a><br>
                    </div>
                </div>
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Terceira linha -->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
    </div>

</body>

</html>
