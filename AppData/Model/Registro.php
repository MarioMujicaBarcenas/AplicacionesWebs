<?php
    namespace AppData\Model;
    class Registro
      {

          private $nombre,$nickname,$usuario,$ap_p,$ap_m,$edad,$id_sexo,$id_usuario;
          {
              $this->conexion= new conexion();
          }
          public function set($atributo,$valor)
          {
            $this->$atributo=$valor;
          }
          public function get($atributo)
          {
            return $this->$atributo;
          }
          public function guardar()
          {
            $sql="INSERT INTO persona VALUES (nombre, ap_p, ap_m, edad, id_sexo, id_usuario) ('{$this->nombre}','{$this->ap_p}','{$this->ap_m}','{$this->edad}','{$this->id_sexo}','{$this->id_tipo_usuario}')";
            $this->conexion->QuerySimple($sql);
          }


      }
 ?>
