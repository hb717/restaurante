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
<!-- h2>Sobre Projeto</h2 -->

<?php
// echo "<h4>Mostrando a data com o dia do mês </h4>";
$meses = array(1 => "Janeiro",2 => "Fevereiro",3 => "Março",4 => "Abril",5 => "Maio",6 => "Junho",7 => "Julho",8 => "Agosto",9 => "Setembro",10 => "Outubro",11 => "Novembro",12 => "Dezembro");
$hoje = getdate();
$dia_mes = $hoje["mday"];
$mes_hoje = $hoje["mon"];
$nomeMes = $meses[$mes_hoje];
$ano = $hoje["year"];
echo "<p style='color: red';>Olá. Hoje é dia $dia_mes de $nomeMes de $ano.</p>";
?>

<h3>Sobre o Site</h3>
<blockquote>
	<p>Este é um Estudo de Projeto de Exercício com objetivo de aprender as ferramentas de construção de Sites. Tem como suporte o Curso de Programador Web sendo realizado no Senac.</p>
</blockquote>

<h3>Sobre o Restaurante</h3>
<blockquote>
	<p><strong>O Bandejão Senac</strong>. Um Projeto de Site com área pública e restrita. Área pública para a venda dos produtos com entregas em domcílio e área restrita de manutenção do site e suas tabelas de clientes, produtos, etc...</p>

</blockquote>
<br>
<h3>Validações no Projeto</h3>
<blockquote>
	<p>O Projeto tem que ter máscaras de campos e validação dos dados.</p>
</blockquote>
<br>
<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>