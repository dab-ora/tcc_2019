<?php
include 'cabecalho.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/css.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paralogin"></a>
    <a class="links" id="paracadastro"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="ope.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">nome</label>
            <input id="nome" name="nome_login" required="required" type="text" placeholder="nome"/>
          </p>
           
          <p> 
            <label for="email_login">senha</label>
            <input id="senha" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="cadastro.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">nome</label>
            <input id="nome" name="nome_cad" required="required" type="text" placeholder="nome" />
          </p>
          <p> 
            <label for="nome_cad">Órgão</label>
            <input id="orgao" name="nome_cad" required="required" type="text" placeholder="orgao" />
          </p>
           
          <p> 
            <label for="email_cad"> e-mail</label>
            <input id="email" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">senha</label>
            <input id="senha" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
          