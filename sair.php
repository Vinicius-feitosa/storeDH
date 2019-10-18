<?php
    
    session_start();
    //Deslocando usuario
    session_destroy();
    //Voltando para home
    header('Location:index.php');