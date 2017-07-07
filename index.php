<?php

require 'autoload.php';

use TrabalhoPos\Conecta;
use TrabalhoPos\Produto;
use TrabalhoPos\Usuario;

$banco = new Conecta();
$produto  = new Produto();
$usuario  = new Usuario();

$produto->populaobjeto(array( "nome" => "Açúcar","valor" => "5.50"));

$usuario->populaobjeto(array(  "email" => "ronilsonpinheiro@gmail.com", "senha" => "1234" ));

if ($produto->salvar($banco->novaConexao())) {
    echo "Produtos Cadastrado com sucesso!";
    echo "<br>";
} else  {
    echo "Produto não foi cadastrado!";
    echo "<br>";
}

if ($usuario->salvar($banco->novaConexao())) {
    echo "Usuario cadastrado com sucesso!";     
} else {
    echo "Usuario não foi cadastrado!";
}
