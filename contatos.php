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
<link rel="stylesheet" href="css/contatos(2).css">

<div class="contatoContainer">

	
	<div class="contatoForm">

		<form method="post" name="formHTML" id="formHTML" action="processa.php">

		<p>
			<label for="formNome">Nome:</label>
			<input type="text" name="formNome" id="formNome" placeholder="Escreva seu nome completo" required>
		</p>

		<p>
			<label for="formEmail">E-mail:</label>
			<input type="email" name="formEmail" id="formEmail" placeholder="Escreva um e-mail válido" required>
		</p>

		<p>
			<label for="formCPF">CPF:</label>
			<input type="text" name="formCPF" id="formCPF" placeholder="Somente números" maxlength="11">
			<small>&larr; Digite somente números.</small>
		</p>

		<p>
			<label for="formSenha">Senha:</label>
			<input type="password" name="formSenha" id="formSenha">
		</p>

		<p>
			<label for="formAssunto">Assunto:</label>
			<input type="text" name="formAssunto" id="formAssunto" value="Contato com ReciclaGatos">
		</p>

		<p>
			<label for="formResposta">Deseja resposta?</label>
			<label><input type="radio" name="formResposta" id="formResposta" value="Sim" checked> Sim</label>
			&nbsp;&nbsp;
			<label><input type="radio" name="formResposta" id="formResposta" value="Não"> Não</label>
		</p>

		<p>
			<label for="formInteresse">Interesses?</label>
			<label><input type="checkbox" name="formInteresse[]" id="formInteresse" value="Gatos" checked> Gatos</label>
			&nbsp;&nbsp;
			<label><input type="checkbox" name="formInteresse[]" id="formInteresse" value="Cães"> Cães</label>
			&nbsp;&nbsp;
			<label><input type="checkbox" name="formInteresse[]" id="formInteresse" value="Pássaros"> Pássaros</label>
			&nbsp;&nbsp;
			<label><input type="checkbox" name="formInteresse[]" id="formInteresse" value="Outros"> Outros</label>
		</p>

		<p>
			<label for="formMensagem">Mensagem:</label>
			<textarea name="formMensagem" id="formMensagem" placeholder="Escreva sua mensagem"></textarea>
		</p>

		<p>
			<label></label>
			<button type="submit" name="formEnvia" id="formEnvia" value="Enviar">Enviar</button>
			<small>&larr; Clique somente uma vez.</small>
			&nbsp;&nbsp;&nbsp;
			<button type="reset" name="formReset" id="formReset" value="Limpar">Limpar campos</button>
		</p>

		</form>
		
	</div>
	
	<div class="contatoLateral">
		<h3>Nossas redes sociais</h3>
		<ul>
			<li><a href="">Facebook</a></li>
			<li><a href="">Instagrm</a></li>
			<li><a href="">Youtube</a></li>
			<li><a href="">Twitter</a></li>
	</div>

</div>	
<?php 
// Chamando o rodapé do tema --> "_footer.php" //
require ("footer.php");
?>