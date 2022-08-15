<div class="container">
  <h1>Inserir nova matrícula</h1>
  <form method="post" action="processa_matricula.php">
    <div class="mb-3">
      <label for="selecionar_aluno" class="form-label">Selecione o Aluno</label>
      <select class="form-select" name="escolha_aluno">
        <option>Alunos Cadastrados</option>
          <?php 
            while($linha = mysqli_fetch_array($consulta_alunos)){
              echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }
          ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="selecionar_aluno" class="form-label">Selecione o Curso</label>
      <select class="form-select" name="escolha_aluno">
        <option>Cursos Cadastrados</option>
          <?php 
            while($linha = mysqli_fetch_array($consulta_cursos)){
              echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }
          ?>
      </select>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-success" value="Matricular aluno no curso">
    </div>
  </form>
</div>
