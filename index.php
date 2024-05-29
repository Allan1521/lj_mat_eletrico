<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja de Materiais Elétricos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Loja de Materiais Elétricos</h1>
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="?page=cabos">Cabos Elétricos</a>

                    </li>
                    <li class="list-group-item">
                        <a href="?page=tubulacoes">Tubulações</a>

                    </li>
                    <li class="list-group-item">
                        <a href="?page=conectores">Conectores</a>
                    </li>
                    </li>
                    <li class="list-group-item">
                        <a href="?page=fitas">Fitas Isolantes</a>
                    </li>
                </ul>
            </div>
                      
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php
                     $page=isset($_GET['page']) ?$_GET['page']:'cabos';
                     //? usamos como if p/verficar se é true or false *isset* é a condição que verifica se a variável tem informção ou se existe.//
                        switch($page){
                            case 'cabos':
                                include 'cabos_eletricos.php';
                                break;
                            case 'tubulacoes':
                                include 'conduites.php';
                                break;
                            case 'conectores':
                                include 'conectores.php';
                                break;
                            case 'fitas':
                                include 'fitas.php';
                                break;
                        }                     
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>