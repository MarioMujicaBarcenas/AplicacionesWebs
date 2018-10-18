<div class="container" style="margin-top:5em;">
  <script type="text/javascript">
  $(document).ready(function(){}
    swal({
      title:"Aun no te haz Registrado",
      text:"Ingresar Ahora ?",
      type:"warning",
      closeOnConfirm: true,
      closeOnCancel: true,
      showCancelButton: true,
      cancelButtonClass:"btn-danger",
      confirmButtonClass:"btn-success",
      }
      function(isConfirm)
      {
        if (isConfirm) {
          window.location.href="<?php echo URL ?>login"
        }
      }
    )
  )
  </script>
</div>
