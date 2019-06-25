<?php
/*
	Página modelo para todas as outras páginas do site.
	Copie e cole este arquivo, renomeie a cópia, edite as variáveis
	inclua os conteúdos.
*/

// Título da página --> Altera a linha 5 de "_header.php" //
$titulo = "Página 2";

// CSS da página --> Altera a linha 11 de "_header.php" //
$css = "/css/pagina2.css";

// Opção do menu principal --> Altera as linhas 32 ~ 36 de "_header.php" //
$menu = "pagina2";

// Chamando o cabeçalho do tema --> "_header.php" //
require ("header.php");
?>

<!-- O conteúdo HTML desta página entra aqui -->
<h2>Página 2</h2>

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


<pre>
11/04/2019
 
AULA 1
 
Primeira aula de PHP

Introdução ao PHP e Uso do Xampp

 
 
 
 

16/04/2019
 
AULA 2
 
 
 
Calculadora padrão, Calculadora IMC; 
 

18/04/2019
 
AULA 3

form_tab.php - formulário para tabuada.
 
 
 
 

25/04/2019
 
AULA 4
 
Formulário de Calculadora com funções;

Site separando herder.php e footer.php da página principal de Site com Bootstreep
 
Conceito e aplicação de funções;

Conceito e uso das funções require, require_once e include;

Variáveis $_SERVER;

Funções de Data e Hora;

30/04/2019
 
AULA 5
 
Formulário de Login;

Chama a página index_php.php se estiver correto.
 

 
</pre>
 

<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>