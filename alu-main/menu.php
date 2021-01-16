<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="logout.php">MartzSoft</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"> <!--ml sirve para desplazar el menú a la derecha y mr para la izquierda-->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-info active" href="#">
            <?php
                echo $_SESSION['userName'];
            ?>      
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">SALIR</a>
      </li>
    </ul>
  </div>
</nav>