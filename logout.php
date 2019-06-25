<?php
/*
	Página modelo para todas as outras páginas do site.
	Copie e cole este arquivo, renomeie a cópia, edite as variáveis
	inclua os conteúdos.
*/

// Título da página --> Altera a linha 5 de "_header.php" //
$titulo = "Página 1";

// CSS da página --> Altera a linha 11 de "_header.php" //
//$css = "/css/modelo.css";

// Opção do menu principal --> Altera as linhas 32 ~ 36 de "_header.php" //
//$menu = "home";

// Chamando o cabeçalho do tema --> "_header.php" //
require ("header.php");
?>

<!-- O conteúdo HTML desta página entra aqui -->
<h2>Logout</h2>

<?php
// echo "<h4>Mostrando a data com o dia do mês </h4>";
$meses = array(1 => "Janeiro",2 => "Fevereiro",3 => "Março",4 => "Abril",5 => "Maio",6 => "Junho",7 => "Julho",8 => "Agosto",9 => "Setembro",10 => "Outubro",11 => "Novembro",12 => "Dezembro");
$hoje = getdate();
$dia_mes = $hoje["mday"];
$mes_hoje = $hoje["mon"];
$nomeMes = $meses[$mes_hoje];
$ano = $hoje["year"];
echo "<p style='color: red';>Olá. Hoje é dia $dia_mes de $nomeMes de $ano.</p>";

session_start();
$_SESSION["email_logado"] = NULL; // Encerrar única sessão
session_destroy(); // Encerrar todas as sessões.
header("Location:login.php");

?>


<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>