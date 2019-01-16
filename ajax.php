<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["telefone"];


echo json_encode (
    array(

        "nome" => $nome,
        "email" => $tel,
        "telefone" => $tel
        
    )
)
?>
