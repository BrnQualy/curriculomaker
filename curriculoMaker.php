<?php
$modelo = $_POST['modelo'];
    $foto = "Imagem/avatar.png";

$dados = array(
    'foto' => $foto,
    'nome' => $_POST['nome'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resumo'],
    'formacoes' => isset($_POST['formacao-curso']) ?
        array(
            'cursos' => $_POST['formacao-curso'],
            'instituicoes' => $_POST['formacao-instituicao'],
            'conclusoes' => $_POST['formacao-conclusao']
        ) : null,
    'experiencias' => isset($_POST['experiencia-cargo']) ?
        array(
            'cargos' => $_POST['experiencia-cargo'],
            'empresas' => $_POST['experiencia-empresa'],
            'inicios' =>  $_POST['experiencia-inicio'],
            'fins' =>  $_POST['experiencia-fim'],
        ) : null
);
require_once("Modelo/{$modelo}.php");
