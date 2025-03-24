<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Projeto SW-1</title>
</head>
<body>
    <div class="container" style="margin-top: 5%">
        <form action="processa.php" method="POST">
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="email" />
                <label class="form-label" for="form1Example1">Endereço de email</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="senha" />
                <label class="form-label" for="form1Example2">Senha</label>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Lembre de mim </label>
                    </div>
                </div>
                <div class="col">
                    <a href="#!">Esqueci a senha?</a>
                </div>
            </div>
        

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Entrar">

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
