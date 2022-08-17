  <div class="container">
    <h1 style="text-align:center">Bem-vindos a Dog cursos</h1>
    <form method="post" action="login.php">
      <div class="mb-3">
        <label for="email" class="form-label">Usuário:</label>
        <input type="text" name="email" placeholder="Digite o e-mail cadastrado" class="form-control">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
      </div>
      <button type="submit" class="btn btn-success botao">Entrar</button>
    </form>
    <?php if(isset($_GET['erro'])){ ?>
      <div class="alert alert-danger" role="alert">
        Usuário ou senha inválidos.
      </div>
    <?php } ?>
  </div>