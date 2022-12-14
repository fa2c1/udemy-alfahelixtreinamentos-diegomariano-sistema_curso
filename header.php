<!doctype html>
<html lang="en">
  <head>
    <title>DogCursos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Data Base for Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
    <!-- Kit Fontawesome -->
    <script src="https://kit.fontawesome.com/d2908fd8b5.js" crossorigin="anonymous"></script>
    <!-- CSS  -->
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid container">
          <a class="navbar-brand" href="?pagina=home">
            <img src="./img/logo.png" title="logo" alt="Logo Dog Cursos">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="?pagina=cursos">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=alunos">Alunos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?pagina=matriculas">Matrículas</a>
              </li>
              <li class="nav-item">
                <?php if(isset($_SESSION['login'])){ ?>
                  <a class="nav-link" href="logout.php">
                    <?php echo $_SESSION['email']; ?> 
                    Sair		
                  </a>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>