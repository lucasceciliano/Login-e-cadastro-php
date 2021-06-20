<?php

echo "<h1>Teste de banco de dados </h1>";

$user = 'root';
$pass = '';

$pdo = new PDO('mysql:host=localhost;dbname=banco_estudo', $user, $pass);

function exibe ($pdo) {

    try {
       
       
        foreach($pdo->query('SELECT * from usuario') as $row) {
            echo "<p> id = ".$row['id']."</p>";
            echo "<p> email = ".$row['email']."</p>";
            echo "<p> senha = ".$row['senha']."</p>";
            echo "<br>==============<br>";
        }
        $pdo = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

exibe($pdo)


?>