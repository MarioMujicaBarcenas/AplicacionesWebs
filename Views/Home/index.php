
<div class="container">

</div>
<?php
if(!isset($_SESSION['id_tipo_usuario'])){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      swal({
        title: "No Haz Iniciado Sesión",
        text: "Desea Ingresar Ahora",
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
