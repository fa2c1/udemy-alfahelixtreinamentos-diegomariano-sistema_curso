    <div class="container">
      <h1>Cursos Cadastrados</h1>
      <table id="cursos" class="table table-sm table-striped" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Nome curso</th>
            <th scope="col">Carga horária</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while($linha = mysqli_fetch_array($consulta_cursos)){
              echo '<tr><td>'.$linha['nome_curso'].'</td>';
              echo '<td>'.$linha['carga_horaria'].'</td>';
          ?>
            <td><a class="btn btn-warning" href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>"><i class="fa-solid fa-pencil"></i> Editar</a></td>
            <td><a class="btn btn-danger" href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>"><i class="fa-solid fa-eraser"></i> Deletar</a></td></tr>
          <?php
            }
          ?>
        </tbody>
      </table>
      <a class="btn btn-success botao" href="?pagina=inserir_curso"><i class="fa-solid fa-plus"></i> Cadastrar Curso</a>
    </div>