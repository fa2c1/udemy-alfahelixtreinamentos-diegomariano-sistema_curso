<div class="container">
  <?php if(!isset($_GET['editar'])){ ?>
  <h1>Cadastro de Cursos</h1>
  <form method="post" action="processa_curso.php">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome do Curso:</label>
      <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
    </div>
    <div class="mb-3">
      <label for="carga_horaria" class="form-label">Carga horária</label><br>
      <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"><br><br>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-success" value="Inserir curso">
    </div>
  </form>
  <?php } else { ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
      <?php if($linha['id_curso'] == $_GET['editar']){ ?>
        <h1>Editar curso</h1>
        <form method="post" action="edita_curso.php">
          <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome curso:</label><br>
            <input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
          </div>
          <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga horária</label><br>
            <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"  value="<?php echo $linha['carga_horaria']; ?>"><br><br>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success" value="Editar curso">
          </div>
        </form>
      <?php } ?>
    <?php } ?>
  <?php } ?>
</div>