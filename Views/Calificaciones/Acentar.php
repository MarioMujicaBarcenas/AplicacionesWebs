<div class="row bg-light text-dark mx-auto col-md-10" >
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <form id="regusr" class="form-signin" action="<?php echo URL ?>login/guardar" method="post">
      <br>
      <h1 class=" font-weight-normal">Acentar Calificacion</h1>




        <div class="col-md-12 form-group">
          <label for="edad">Calificacion</label>
          <input class="form-control" type="number" name="Calificacion" value="" placeholder="Calificacion">
        </div>
        <div class="col-md-12 form-group">
          <label for="id_sexo">Materia</label>
          <select class="form-control" name="id_sexo">
            <option value="">Selecciona...</option>
            <?php
            if(isset($datos[0])){
              while($fila = mysqli_fetch_assoc($datos[0])){ ?>
                <option value="<?php echo $fila['id_sexo'] ?>"><?php echo $fila['descripcion'] ?></option>
              <?php }
            }
            ?>
          </select>
        </div>




      <div class="form-group">
        <label for="id_tipo_usuario">Unidad</label>
        <select class="form-control" name="id_tipo_usuario">
          <option value="">Selecciona...</option>
          <?php
          if(isset($datos[1])){
            while($fila = mysqli_fetch_assoc($datos[1])){ ?>
              <option value="<?php echo $fila['id_tipo_usuario'] ?>"><?php echo $fila['descripcion'] ?></option>
            <?php }
          }
          ?>
        </select>
      </div>
      <br>
      <button type="submit" class="btn btn-lg btn btn-outline-success btn-block">Acentar</button>
      <br>
      <br>
    </form>
  </div>
</div>
<?php
if(!isset($_SESSION['id_tipo_usuario'])){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      swal({
        title: "LLena con Mucha Atencion",
        text: "Verifica los Datos Antes de Acentar",
        type: "warning",
        closeOnConfirm: false,
        closeOnCancel: true,
        showCancelButton: true,
        cancelButtonClass: "btn-danger",
        confirmButtonClass: "btn-success",
      },
      function(isConfirm){
        if(isConfirm)
          window.location.href = "<?php echo URL ?>login";
      }
    );
    })
  </script> <?php
}
?>
