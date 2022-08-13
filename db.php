<?php     
  # Conexão com o banco de dados MySQL
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $database = "dbcursos";
  
  $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

  $query = "SELECT * FROM cursos";
  $consulta = mysqli_query($conexao, $query);
?>