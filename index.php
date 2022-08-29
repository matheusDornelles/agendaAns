<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Agenda ANS</title>
</head>
<?php
    include("db/conexao.php");
?>
<body>
<header>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"></a>
                <img src="img/ans.webp" alt="agenda ans" width = "120">   
                
                
                <div class= "navbar-collapse" id= "navbar-container" >
                    <ul class= "navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menuop=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?menuop=contatos">Contato</a>
                        </li>  
                    </ul>
                </div>
            </nav>
    </div>
</header class="bg-dark">
<main>
    <div class="container">
    <?php
        $menuop = (isset($_GET['menuop']))?$_GET['menuop']:'home';
        switch($menuop){
            case 'home':
                include("./paginas/home/home.php");
            break;
            case 'contatos':
                include("./paginas/contatos/contatos.php");
            break;
            case 'cad-contato':
                include("./paginas/contatos/cad-contato.php");
            break;
            case 'inserir-contato':
                include("./paginas/contatos/inserir-contato.php");
            break;
            case 'editar-contato':
                include("./paginas/contatos/editar-contato.php");
                break;
            case 'atualizar-contato':
                include("./paginas/contatos/atualizar-contato.php");
            break;
            case 'excluir-contato':
                include("./paginas/contatos/excluir-contato.php");
            break;
            }
    ?>
    </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
            <div class="text-center">Agenda ANS versão Matheus Dornelles</div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>