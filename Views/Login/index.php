<div class="row bg-light text-dark mx-auto col-md-10" >
    <div class="col-md-6 mx-auto">
      <form id="form-signin" class="form-signin" method="post" action="<?php echo URL?>Login/Verify">
        <h1 class="font-weight-normal">Inicia Sesión</h1>
        <div class="form-group">
          <label for="usuario" >Usuario</label>
          <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nickname" required>
        </div>
        <div class="form-group">
          <label for="contraseña" >Contraseña</label>
          <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button class="btn btn-lg btn-outline-primary btn-block" id="signin" type="submit">Entrar</button>
          </div>
          <div class="col-md-6">
            <a class="btn btn-lg btn-outline-danger btn-block" id="signin" type="button" href="<?php echo URL ?>login/registrar">Registrar</a>
          </div>
      </form>
    </div>
