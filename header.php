<!--?php
	/* require_once(inc/app.php); */
	session_start();
	if (!isset($_SESSION["email_logado"])) {
		header("Location:logar.php");
	} else {
		$email = $_SESSION["email_logado"];
	}
	require_once("app.php"); 
? -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Projeto Bandejão Senac</title>
	<link rel="stylesheet" href="global.css"><!-- Folhas de estilo globais -->
</head>
<body>

<a name="topo" id="topo"></a>

<main>

	<!-- Cabeçalho da página -->
	<header>
		<div class="headerLogo"><h1><img src="img/const15.gif" height="95" alt="Projeto Aula 5"><a href="/" title="Bandejão Senac"></a></h1></div>
		<div class="headerTitle"><h1><a href="/" title="Estudo em CSS3, HTML5 e PHP">Bandejão Senac<h5>Restaurante Popular</h5></a></h1></div>

	</header>

	<!-- Menu principal da página -->

	
     <nav>
            <a href="home.php" title="Página Principal">Home</a>
            <a href="clientes.php" title="Cadastros de Clinetes">Clientes</a>
            <a href="produtos.php" title="pagina 2">Produtos</a>           
			<a href="contatos.php" title="Fale Conosco">Contatos</a>
			<a href="logout.php" title="Sair do Sistema">logout</a>
			<a href="login.php" title="Entrar no Sistema">login</a>
			<a href="listar_usuario.php" title="Usuários do Sistema">Usuários</a>
			<a href="sobre.php" title="Sobre o Projeto">Sobre</a>
      </nav>	
	
	<!-- Conteúdo da página -->
	<content>