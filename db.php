<?php     
  # Conexão com o banco de dados MySQL
  $servidor = "localhost";
  $usuario = "fernando";
  $senha = "L0g4r";
  $database = "cursos";
  
  $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

  $query = "SELECT * FROM cursos";
  $consulta_cursos = mysqli_query($conexao, $query);

  $query = "SELECT * FROM alunos";
  $consulta_alunos = mysqli_query($conexao, $query);

  $query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso 
    FROM alunos, cursos, alunos_cursos
    WHERE alunos_cursos.id_aluno = alunos.id_aluno
    AND alunos_cursos.id_curso = cursos.id_curso";
			
$consulta_matriculas = mysqli_query($conexao, $query);
