<?php

try {       
    $pdo = new PDO("mysql:host=localhost;dbname=BANCO;charset=utf8", 
"root", "246853Gi@");


//ERROS PARA BANCO DE DADOS
} catch (PDOException $e) {

    echo "ERRO COM BANCO DE DADOS". $e->getMessage();


}catch (Exception $e) {

    echo "ERRO GENÉRICO". $e->getMessage();
    
}
//--------------------------- insert ----------------------------------

