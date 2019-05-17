<?php 
	// session_start inicia a sessão
	session_start();

	// as variáveis login e senha recebem os dados digitados na página anterior
	$login = $_POST['nome'];
	$senha = $_POST['senha'];
	// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

	$pdo = new PDO('mysql:host=localhost;dbname=tcc', 'aluno', 'aluno');
	if (!$pdo) {
    	die('Não foi possível conectar: ' . mysql_error());
	}

	// A variavel $result pega as varias $login e $senha, faz uma 
	//pesquisa na tabela de usuarios
	$query  = "SELECT * FROM usuarios WHERE NOME = :login AND SENHA= :senha";

	$comando = $pdo->prepare($query);
	$comando->bindValue(":login",$login);
    $comando->bindValue(":senha",$senha);
    $comando->execute();
 
    $result = $comando->fetchAll();

	/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
	bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
	será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
	resultado ele redirecionará para a página site.php ou retornara  para a página 
	do formulário inicial para que se possa tentar novamente realizar o login */
	if( count ($result) > 0 )
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:verdenuncia.php');
		exit();
	} else{
  		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		header('location:login.php');
  		exit();
	}
    
?>
