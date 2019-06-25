<?php
/*
	Página modelo para todas as outras páginas do site.
	Copie e cole este arquivo, renomeie a cópia, edite as variáveis
	inclua os conteúdos.
*/

// Título da página --> Altera a linha 5 de "_header.php" //
$titulo = "Página Modelo";

// CSS da página --> Altera a linha 11 de "_header.php" //
$css = "/css/modelo.css";

// Opção do menu principal --> Altera as linhas 32 ~ 36 de "_header.php" //
$menu = "home";

// Chamando o cabeçalho do tema --> "_header.php" //
require ("header.php");
?>

<!-- O conteúdo HTML desta página entra aqui -->

<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>