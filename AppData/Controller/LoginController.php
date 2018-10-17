<?php
  namespace AppData\Controller;
  use AppData\Model\Login;
  class loginController
  {
    private $login;
    function __construct()
    {
      $this->login=new Login();
    }
    function index()
    {

    }
    public function verify()
    {
      if ($_POST)
      {
        session_start();
          $this->login->set("usuario", $_POST["usuario"]);
          $this->login->set("password", $_POST["password"]);
          $datos = $this->login->verify();
          if (mysqli_num_rows($datos) > 0)
            {
                $datos=mysqli_fetch_assoc($datos);
                $_SESSION['nombre']=$datos["nombre"]." ".$datos["ap_p"]." ".$datos["ap_m"];

            }
            else
            {
              $_SESSION["error_login"]="los datos no coinciden con nuestros registros";
            }
            ?>
              <script type="text/javascript">
              window .location.href= "<?php echo URL ?>login";
              </script>
            <?php
      }

    }
    
    public function logout()
    {
        session_destroy();
    }
  }

 ?>
