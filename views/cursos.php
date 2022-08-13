  <div id="conteudo" class="container">
    <h1>Bem-vindos aos nossos ursos</h1>
    <table>
      <th>
        <td>Nome Curso</td>
        <td>Carga Horária</td>
      </th>
      <?php
        while($linha = mysqli_fetch_array($consulta)){
          echo '<tr><td>'.$linha['nome_curso'].'</td>';
          echo '<td>'.$linha['carga_horaria'].'</td></tr>';
        }
      ?>
    </table>
  </div>