<div class="container">
  <br><br>
  <?php
  if(mysqli_num_rows($datos)>0){
  ?>
  <div class="bg-light text-dark mx-auto col-md-10" >
    <br>
    <br>
  <h3>Lista de Alumnos</h3>
  <br>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre del Alumno</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($fila=mysqli_fetch_assoc($datos)) { ?>
        <tr>
          <td scope="col"><?php echo $fila['nombre']; ?></td>
          <td scope="col"><?php echo $fila['ap_p']; ?></td>
          <td scope="col"><?php echo $fila['ap_m']; ?></td>
          <th scope="col"><button class="btn btn-outline-success editar" id="<?php echo $fila['id_usuario'] ?>">Editar</button> </th>
          <th scope="col"><button class="btn btn-outline-danger" href="<?php echo URL ?>Calificaciones/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</button> </th>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
    <?php
  } else { ?>
    <h2>No se encuentra ningun dato</h2>
  <?php } ?>
  <br>
  <?php
  if(mysqli_num_rows($datos)>0){
  ?>
  <div class="bg-light text-dark mx-auto col-md-10" >
    <br>
    <br>
  <h3>Lista de Profesores</h3>
  <br>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre del Profesor</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($fila=mysqli_fetch_assoc($datos)) { ?>
        <tr>
          <td scope="col"><?php echo $fila['nombre']; ?></td>
          <td scope="col"><?php echo $fila['ap_p']; ?></td>
          <td scope="col"><?php echo $fila['ap_m']; ?></td>
          <th scope="col"><button class="btn btn-outline-success editar" id="<?php echo $fila['id_usuario'] ?>">Editar</button> </th>
          <th scope="col"><button class="btn btn-outline-danger" href="<?php echo URL ?>Calificaciones/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</button> </th>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
    <?php
  } else { ?>
    <h2>No se encuentra ningun dato</h2>
  <?php } ?>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar</h4>
        <button type="button" class="close"
              data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form-signin" action="" method="post" id="actualizacion">
          <input type="text" hidden name="id" id="id" value="">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"
              id="nombre" name="nombre"></input>
          </div>
          <div class="form-group">
            <label for="ap_p">Apellido Paterno</label>
            <input type="text" class="form-control"
              id="ap_p" name="ap_p"></input>
          </div>
          <div class="form-group">
            <label for="ap_m">Apellido Materno</label>
            <input type="text" class="form-control"
              id="ap_m" name="ap_m"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success actualiza"
          data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>Calificaciones/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#id").val(data['id_usuario'])
          $("#nombre").val(data['nombre'])
          $("#ap_p").val(data['ap_p'])
          $("#ap_m").val(data['ap_m'])
          $("#myModal").modal('show');
        }
      })
    })
    $(".actualiza").click(function(){
      var arreglo=$("#actualizacion").serializeArray();
      $.post("<?php echo URL ?>Calificaciones/edit/",{arreglo:arreglo},function(data){
        window.location.href="<?php echo URL ?>Calificaciones/ver";
      })
    })
  })
</script>
