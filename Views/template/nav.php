<?php session_start(); ?>
<nav class="navbar fixed-top bg-dark">
    <ul class="nav nav-tabs" style="margin-left:5em;">
        <li >
            <a class="btn btn-outline-light text-white  my-2 my-sm-0" type="submit" href="<?php echo URL; ?>Home">TESVB</a>
        </li>
            <span><?php if(isset($_SESSION['id_tipo_usuario'])) echo $_SESSION['id_tipo_usuario']; ?></span>
            <?php if(isset($_SESSION['id_tipo_usuario']) and ($_SESSION['id_tipo_usuario']==1 or $_SESSION['id_tipo_usuario']==2)){ ?>
        <li class="nav-item dropdown" style="margin-left:1em;">
            <a class="nav-link dropdown-toggle btn-outline-light " data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Calificaciones</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo URL; ?>Ver">Ver</a>
            <?php if($_SESSION['id_tipo_usuario']==1){ ?>
            <a class="dropdown-item" href="<?php echo URL; ?>Acentar">Acentar</a>
            <a class="dropdown-item" href="<?php echo URL; ?>Modificar">Modificar</a>
          <?php } ?>
        </li>
        <?php } ?>
        <li class="nav-item dropdown" style="margin-left:1em;">
          <a class="nav-link dropdown-toggle btn-outline-light " data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
          aria-expanded="false">Materias</a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo URL; ?>Asignar">Asignar</a>
        </li>
        <li class="nav-item dropdown" style="margin-left:1em;">
            <a class="nav-link dropdown-toggle btn-outline-light " data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Reportes</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo URL; ?>Materia">Materia</a>
            <a class="dropdown-item" href="<?php echo URL; ?>Grupo">Grupo</a>
            <a class="dropdown-item" href="<?php echo URL; ?>Aprobacion">Aprobacion</a>
        </li>
        <form class="form-inline mt-2 mt-md-0" style="margin-left:7em;">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-light  my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <form class="form-inline mt-2 mt-md-0" style="margin-left:7em;">
              <a class="btn btn-outline-light text-white my-2 my-sm-0" href="<?php echo URL; ?>Login">Login</a>

              <a class="btn btn-outline-light text-white my-2 my-sm-0" style="margin-left:1em" href="<?php echo URL; ?>Registro">Registrar</a>
        </form>
        <form class="" action="index.html" method="post">
            <a class="btn btn-outline-light text-white my-2 my-sm-0" style="margin-left:1em;"  href="<?php echo URL; ?>login/logout">Cerrar Sesion</a>
        </form>

    </ul>
</nav>
