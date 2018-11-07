<?php session_start(); ?>
<script type="text/javascript">

</script>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand"  href="<?php echo URL ?>home">TESVB</a>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <?php if(isset($_SESSION['id_tipo_usuario']) and ($_SESSION['id_tipo_usuario']==2 or $_SESSION['id_tipo_usuario']==3 or $_SESSION['id_tipo_usuario']==1)){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?php echo URL ?>Calificaciones/ver">Ver</a>
          <?php if($_SESSION['id_tipo_usuario']==2 or $_SESSION['id_tipo_usuario']==1){ ?>
          <a class="dropdown-item" href="<?php echo URL ?>Calificaciones/Acentar">Acentar</a>
          <a class="dropdown-item" href="#">Modificar</a>
        <?php } ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Materias</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <a class="dropdown-item" href="#">Asignar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">Materia</a>
          <a class="dropdown-item" href="#">Grupo</a>
          <?php if($_SESSION['id_tipo_usuario']==1){ ?>
          <a class="dropdown-item" href="#">Aprobacion</a>
          <?php } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL; ?>login/logout">Logout</a>
      </li>
    <?php } else { ?>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo URL; ?>login">Login</a>
      </li>
    <?php } ?>
    </ul>
  </div>
</nav>
