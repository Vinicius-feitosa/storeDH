<?php
$nomeSitema = "Cursos Aí!";
$usuario = ["nome"=>"Vinicius"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop DH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<header>
        <div class="navbar">
            <h1 id="logo">
            <?php echo $nomeSitema;?>
            </h1>
            <nav>
            <ul class="nav">
                <?php if (isset($usuario) && $usuario != "") {?>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario{'nome'}; ?></a>
                    </li>
                <?php }else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="container">
    
                <div class="d-flex justyfy-content-between main" style="">
                    <div class="card text-center mr-4">
                    <h2>Título do produto</h2>
                    <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                        <div class="card-body">
                            <p class="card-text">R$15,00</p><br>
                            <a link href="compre já">Buy</a>
                        </div>
                    </div>
                        <div class="card text-center mr-4" style="">
                            <h2>Título do produto</h2>
                            <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                                <div class="card-body">
                                    <p class="card-text">R$15,00</p><br>
                                    <a link href="compre já">Buy</a>
                                </div>
                        </div>
                    <div class="card text-center" style="">
                        <h2>Título do produto</h2>
                        <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                            <div class="card-body">
                                <p class="card-text">R$15,00</p><br>
                                <a link href="compre já">Buy</a>
                            </div>
                    </div>
                </div>

        </section>
    </main>
</body>
</html>