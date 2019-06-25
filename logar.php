<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
//$con = mysql_connect("127.0.0.1", 'root', "digite a senha do banco aqui") or die  ("Sem conexão com o servidor");
$con = mysql_connect("127.0.0.1", 'root', '') or die  ("Sem conexão com o servidor");

// Se habilitar a linha abaixo ela vai funcionar, mas alinha seguinte cai na mensagem de erro.
//$con = mysqli_connect('localhost','root','','serverdb') or die('Erro ao conectar ao banco de dados');

$select = mysql_select_db("restaurante") or die("Sem acesso ao DB, Entre em contato com o Administrador, haroldo@infolink.com.br");
// A linha acima seleciona o Banco de Dados, pode ser usada para selecionar outros.
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `USUARIO` 
WHERE `NOME` = '$login' AND `SENHA`= MD5('$senha')");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a página site.php ou retornará  para a página do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 ) {
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
echo "<script> alert('Seja Bem-vindo $login');</script>";  	
header('location:home.php');
} else{
  /* echo "senha incorreta"; */
 // echo "<script> alert('Usuário Não cadastrado ou Senha incorreta');</script>";  	
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']); 
  echo"<script language='javascript' type='text/javascript'>alert('Usuário Não cadastrado ou Senha incorreta');window.location.href='index.php';</script>";  
  die();
  //header('location:index.php');
}
?>
