<?php 

require_once("modelo/Balde.php");
require_once("modelo/Computador.php");
require_once("modelo/Livro.php");
require_once("modelo/Produto.php");

$produto = new Produto();
$produto->setDescricao("Produto da loja do julio");
$produto->setUnidadeMedida("10");
$produto->getDados();

$livro = new Livro();
$livro->setAutor("Danyel de Sena");
$livro->setDescricao("Drama");
$livro->setUnidadeMedida("Páginas");
$livro->getDados();

$computador = new Computador();
$computador->setMemoria("1TB");
$computador->setProcessador("I9-12000k");
$computador->setDescricao("Gamer");
$computador->setUnidadeMedida("Quantidade");
$computador->getDados();

$balde = new Balde();
$balde->setCapacidade("5L");
$balde->setDescricao("Tinta");
$balde->setUnidadeMedida("Quantidade");
$balde->getDados();