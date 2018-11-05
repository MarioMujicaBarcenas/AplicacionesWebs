
<div class="container">
  
</div>
<?php
if(!isset($_SESSION['id_tipo_usuario'])){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      setTimeout(function(){
        swal({
          title: "Aún no haz iniciado sesión",
          text: "Ingresar ahora?",
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
        })
      },4000)
    })
  </script> <?php
}
?>
