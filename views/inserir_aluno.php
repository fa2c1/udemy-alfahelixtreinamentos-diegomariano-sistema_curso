<div class="container">
<?php if(!isset($_GET['editar'])){ ?>
  <h1>Cadastro de Alunos</h1>
  <form method="post" action="processa_aluno.php">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome do Aluno:</label>
      <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
    </div>
    <div class="mb-3">
      <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
      <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-success" value="Inserir aluno">
    </div>
  </form>
  <?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
      <?php if($linha['id_aluno'] == $_GET['editar']){ ?>
        <h1>Editar aluno</h1>
        <form method="post" action="edita_aluno.php">
          <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome do Aluno:</label>
            <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
          </div>
          <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success" value="Editar aluno">
          </div>
        </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
</div>