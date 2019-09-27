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
        <div class="container d-flex justify-content-between align-items-center">
            <h1><?php echo $nomeSitema;?></h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Cursos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Cadastrar
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <?php
        $nome="Vinicius";
        $idade= 10;
        $usuario= ["Vinicius","Oliveira", 21, ["musica","café","skate"]];
        
        $usuarioDois = ["nome"=>"vinicius","sobrenome"=>"oliveira"];
        
       // var_dump($usuario);

        $usuario[] = "Guitarra";
        
        echo "<br>";
        
        //var_dump($usuario);
        
        echo $usuario[0&&1];
        
        echo "<h1>".$usuario[0].$usuario[1]."</h1>";

        //echo $usuarioDois["sobrenome"];
    ?>
</body>
</html>