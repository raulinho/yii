<nav class="navbar navbar-default" role="navigation">
<div class="container">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>enemyGamerz</b></a>
  </div>


  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>
      <li><a href="./registro.php"><button type="button" class="btn btn-default">Sign UP</button></a></li>
      <li><a href="./login.php"><button type="button" class="btn btn-default">Sign IN</button></a></li>
    <?php else:?>
        <?php if($_SESSION["user_id"] == '1'):?>
            <li><a href="juegos.php">Gestionar Juegos</a></li>
            <li><a href="usuarios.php">Gestionar Usuarios</a></li>
        <?php endif;?>
      <li><a href="usersonline.php">Usuarios Conectados</a></li>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div>
</div>
</nav>