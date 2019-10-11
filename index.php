<?php
$nomeSitema = "Cursos Aí!";
$usuario = ["nome"=>"Vinicius"];

$produtos = [
    ["nome"=>"Curso FullStack","preco"=>1200.00,"duracao"=>"5 meses", "img"=>"img/curso-ti.jpg"],
    ["nome"=>"Curso Marketing","preco"=>1000.00,"duracao"=>"4 meses", "img"=>"img/curso-ti.jpg"],
];

$caixas =["Cursos","Palestras","Artigos"];

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
        <div class="navbar bg-dark text-white justify-content-center">
            <ul class="nav">
                    <?php foreach($caixas as $caixas) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $caixas; ?></a>
                </li>
                    <?php } ?>
            </ul>

            <!-- <ul class="nav justify-content-center">
                    <li class="nav-item">
                            <a class="nav-link active" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Palestras</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Artigos</a>
                    </li>
            </ul> <-->
            <nav>
            </nav>
        </div>
    </header>
    <main>
        <section class="container">
            
                <div  class="d-flex justify-content-center main" style="">
                <?php if(isset($produtos) && $produtos != []) {?>
                    <?php foreach($produtos as $produto){ ?>
                        <div class="card text-center mr-4">
                            <h2><?php echo $produto['nome']; ?></h2>
                            <img id="foto" src="<?php echo $produto['img']; ?>" class="card-img-top" alt="curso de t.i.">
                            <div class="card-body">
                                <h5 class="card-text"><?php echo $produto['preco']; ?></h5><br>
                                <a link href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <h1>Não tem produtos cadastrados nessa sessão :( </h1>
                <?php } ?>
                    </div>
        </section>
    </main>
</body>
</html>
