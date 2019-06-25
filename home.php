<!DOCTYPE html>
<html">
<head>
<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo  para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:logar.php');
  }
 
$logado = $_SESSION['login'];
require ("header.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bandejão Senac</title>
</head>
 
<body>
<!-- O conteúdo HTML desta página entra aqui -->

	<link rel="stylesheet" href="home.css">

<div class="HomeContainer">

	
	<div class="HomeTexto1">
		<h3>Projeto de Restaurante</h3>
		<p>Funcionalidade: Servir refeições no local e em domíclio através de pedidos</p>
<p>Atendimento no local com abertura de comanda por mesa, hora de abertura, hora de encerramento. </p>
<p>Avaliação do atendimento pelo cliente via internet. </p>

    <p>Cadardárpio de Produtos por Categoria</p>
	<p>Sobre Categoria de Produtos Comercializados:</p>
        <span>
            <ul>
                <li><a href="">Refeições</a></li>
                <li><a href="">Bebidas</a></li>
                <li><a href="">Sobremesas</a></li>
            </ul>
        </span>
		
	</div>	
	<div class="HomeTexto2">
	<h3>Pedidos pela Internet</h3>
		<h3>Sobre os pedidos pela Internet</h3>
    <p>Escolha de Produtos com carrinho de compra, abrir pedido, inclusão de produtos e finalização da compra (usada por clientes cadastrados).</p>
    <p>Forma de Pagamento:</p>
        <span>
            <ul>
                <li><a href="">Por Cartão de Crédito pela Internet</a></li>
                <li><a href="">Por Cartão de Débito na entrega em domicílio</a></li>
                <li><a href="">Por Dinheiro na entrega em domicílio</a></li>
            </ul>
        </span>

<p>Sobre o cadastro de produtos: Cadastro de refeições com fotos, detalhes de cada refeição mostrando os componentes de cada prato.</p>	

<p>Observação: .</p>

<p>Neste Site temos.</p>	



	</div>
</div>

<!-- Rodapé da página --> 
<br>
<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>
</body>
</html>