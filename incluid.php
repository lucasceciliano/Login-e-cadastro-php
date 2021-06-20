<?php
session_start();

$user = 'root';
$pass = '';

$pdo = new PDO('mysql:host=localhost;dbname=banco_estudo', $user, $pass);


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";

foreach($pdo->query("INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')") as $row) {
    
};

if(empty($result_usuario)){
    header('Location: cadastro.php');
}else{
    header('Location: menu.php');
}

?>