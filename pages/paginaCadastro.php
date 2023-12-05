<?php

include("../config/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../src/images/logoIcon.png" />
  <title>Cadastro - Meu Mei</title>

  <!-- Linkando Fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />

  <!-- Linkando CSS -->
  <link rel="stylesheet" href="../style/cabecalho.css" />
  <link rel="stylesheet" href="../style/paginaCadastro.css" />

  <!-- Linkando Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</head>

<body class="body">
  <!-- Cabeçalho - Início -->
  <header class="fixarCabecalho">
    <div class="cabecalho">
      <div class="logo">
        <a href="../index.html">
          <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
        </a>
      </div>
      <div class="botoesCabecalho">
        <button onclick="window.location.href='../pages/paginaLogin.html';" type="submit" class="botoesCabecalhoDois"
          id="botaoLogin">
          LOGIN
        </button>
        <button onclick="window.location.href='../pages/paginaCadastro.html';" type="submit" class="botoesCabecalhoDois"
          id="botaoCadastro">
          CADASTRO
        </button>
      </div>
    </div>
  </header>
  <!-- Cabeçalho - Fim -->

  <!-- Início Formulário -->
  <form action="" method="post">
    <div class="formulario">
      <div class="textoFormulario">
        <label for="textoFormulario" id="textoFormulario">Se cadastre e tenha dias com menos estresse</label>
      </div>
      <div class="mb-3">
        <input type="text" class="inputFormulario" id="inputNomeDaEmpresa" placeholder="Nome da Empresa" />
      </div>
      <div class="mb-3">
        <input type="text" class="inputFormulario" id="inputEmail" placeholder="E-mail" />
      </div>
      <div class="mb-3">
        <input type="text" class="inputFormulario" id="inputCnpj" placeholder="CNPJ" />
      </div>
      <div class="mb-3">
        <input type="password" class="inputFormulario" id="inputSenha" placeholder="Senha" />
      </div>
      <label for="textoCadastro" id="textoCadastro">
        Ao se inscrever, você concorda com nossos
        <a href="#">Termos de Uso e com a Política de Privacidade</a>
      </label>
      <button type="submit" id="botaoFormulario">CADASTRE-SE</button>
      <img id="barraFormulario" src="../src/images/Line 1.svg" alt="" />
      <label for="linkLogin" id="linkLogin">
        Já tem uma conta? <a href="paginaLogin.html">Faça Login!</a>
      </label>
    </div>
  </form>
  <!-- Final Formulário -->
</body>

</html>