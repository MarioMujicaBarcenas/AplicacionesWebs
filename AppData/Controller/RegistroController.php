<?php
  namespace AppData\Controller;
  use AppData\Model\Registro;
  class RegistroController
  {
    private $registro;
    function __construct()
    {
      $this->registro=new Registro();
    }
    function index()
    {

    }
    public function Registrar()
    {
      
    }
    public function guardar()
    {
      if(isset($_POST))
      {
        $this->registro->set("nombre",$_POST['nombre']);
        $this->registro->set("ap_p",$_POST['ap_p']);
        $this->registro->set("ap_m",$_POST['ap_m']);
        $this->registro->set("edad",$_POST['edad']);
        $this->registro->set("id_sexo",$_POST['sexo']);
        $this->registro->set("id_tipo_usuario",$_POST['id_tipo_usuario']);
        $this->registro->guardar();


      }
    }
    function __destruct()
    {

    }
  }

 ?>
