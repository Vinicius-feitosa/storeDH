<?php
$nomeSitema = "Site top";
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="container">
    
                <div class="row justyfy-content-around" style="width: 18rem;">
                    <div class="col-lg-3-card card text-center">
                    <h2>Título do produto</h2>
                    <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                        <div class="card-body">
                            <p class="card-text">R$15,00</p><br>
                            <a link href="compre já">Buy</a>
                        </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <h2>Título do produto</h2>
                    <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                        <div class="card-body">
                            <p class="card-text">R$15,00</p><br>
                            <a link href="compre já">Buy</a>
                        </div>
                </div>
                <div class="card text-center" style="width: 18rem;">
                    <h2>Título do produto</h2>
                    <img src="../img/cursoo.jpg" class="card-img-top" alt="curso de t.i.">
                        <div class="card-body">
                            <p class="card-text">R$15,00</p><br>
                            <a link href="compre já">Buy</a>
                        </div>
                </div>

        </section>
    </main>
</body>
</html>