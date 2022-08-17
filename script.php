<?php
/*     
  # Conexão com o banco de dados MySQL *****************************************
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $database = "cursos";
  
  $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
  

  # Criando tabelas usando PHP ************************************************

  # Tabela cursos (nome do curso, carga horaria)
  $query = "CREATE TABLE cursos(
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
  )";
  
  $executar = mysqli_query($conexao, $query);
  
  # Tabela alunos (nome do aluno, data de nascimento)
  $query = "CREATE TABLE alunos(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
  )";
  
  $executar = mysqli_query($conexao, $query);
  
  # Tabela alunos_cursos (aluno, curso)
  $query = "CREATE TABLE alunos_cursos(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
  )";
  
  $executar = mysqli_query($conexao, $query);

  # Tabela de usuarios do sistema(nome, email senha)
  $query = "CREATE TABLE usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    senha VARCHAR(36) NOT NULL,
    PRIMARY KEY(id_usuario),
    UNIQUE KEY(email)
  )";

  $executar = mysqli_query($conexao, $query);
  
  # Inserir dados nas tabelas **************************************

  # Inserir Alunos
  $query = "INSERT INTO alunos(nome_aluno, data_nascimento) VALUES('Jose', '01-01-1990')";  
  $query = "INSERT INTO alunos(nome_aluno, data_nascimento) VALUES('Maria', '01-04-1991')";
  
  $executar = mysqli_query($conexao, $query);  
  
  # Inserir cursos
  $query = "INSERT INTO cursos(nome_curso, carga_horaria) VALUES('PHP E MYSQL', 10)";
  $executar = mysqli_query($conexao, $query);
  
  # Alunos curso
  $query = "INSERT INTO alunos_cursos(id_aluno, id_curso) VALUES(1, 1)";
  mysqli_query($conexao, $query);

   # Usuario do sistema
  $query = "INSERT INTO usuarios(nome, email, senha) VALUES('Root', 'root@admsistema.com', '123456')";
  mysqli_query($conexao, $query);
  
  # Deletando alunos **************************************
  if(mysqli_query($conexao, "DELETE FROM alunos WHERE id_aluno = 9 or id_aluno = 10")){
    echo 'Apagado com sucesso';
  }
  else{
    echo 'Falha ao apagar dados';
  }      
  
  # Atualizando alunos **************************************
  if(mysqli_query($conexao, "UPDATE alunos SET nome_aluno = 'Jose Miguel' WHERE id_aluno = 7")){
    echo 'Sucesso';
  }
  
  if(mysqli_query($conexao, "UPDATE alunos SET nome_aluno = 'Maria Capitolina' WHERE id_aluno = 8")){
    echo 'Sucesso';
  }     
  
  # Realizando Consultas **************************************

  echo '<table border=1>
      <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
      </tr>';
  
  $consulta = mysqli_query($conexao, "SELECT * FROM alunos");
  
  while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['id_aluno'].'</td>';
    echo '<td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['data_nascimento'].'</td></tr>';
  }
  
  echo '</table>';  
  
  $consulta = mysqli_query($conexao, "SELECT alunos.nome_aluno, cursos.nome_cursos FROM alunos, cursos, alunos_cursos where alunos_cursos.id_aluno = aluno.id_aluno AND alunos_cursos = cursos.id_cursos");
  
  while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_curso'].'</td>';
    echo '<td>'.$linha['nome_aluno'].'</td>';
  }
  
  echo '</table>';  
  
  $consulta = mysqli_query($conexao, "SELECT alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, alunos_cursos WHERE alunos_cursos.id_aluno = alunos.id_aluno AND alunos_cursos.id_curso = cursos.id_curso");
  
  echo '<table border=1><tr><th>Nome do aluno</th><th>Nome do curso</th></tr>';
  while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso'].'</td></tr>';
  }
  
  echo '</table>';
*/  
 ?>