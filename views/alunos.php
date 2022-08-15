  <div class="container">
    <h1>Alunos Cadastrados</h1>
    <table class="table table-sm">
      <tr>
        <th scope="col">Nome aluno</th>
        <th scope="col">Data nascimento</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
      <?php 
        while($linha = mysqli_fetch_array($consulta_alunos)){
          echo '<tr><td >'.$linha['nome_aluno'].'</td>';
          echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
        <td><a class="btn btn-warning" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
        <td><a class="btn btn-danger" href="deleta_aluno.php?id_curso=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
      <?php
        }
      ?>
    </table>
    <a class="btn btn-success botao" href="?pagina=inserir_aluno">Cadastrar Aluno</a>
  </div>