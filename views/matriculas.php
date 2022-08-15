<div class="container">
    <h1>Alunos Matriculados</h1>
    <table class="table table-sm">
      <tr>
        <th scope="col">Nome do Aluno</th>
        <th scope="col">Nome do Curso</th>
        <th scope="col">Deletar</th>
      </tr>
      <?php 
        while($linha = mysqli_fetch_array($consulta_matriculas)){
          echo '<tr><td >'.$linha['nome_aluno'].'</td>';
          echo '<td>'.$linha['nome_curso'].'</td>';
      ?>
        <td><a class="btn btn-danger" href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
      <?php		
        }
      ?>
    </table>
    <a class="btn btn-success botao" href="?pagina=inserir_matricula">Inserir nova matricula</a>
  </div>