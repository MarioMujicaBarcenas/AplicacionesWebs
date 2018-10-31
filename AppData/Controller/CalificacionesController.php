<?php namespace AppData\Controller;
	use AppData\Model\Calificaciones;
	class CalificacionesController{
		private $calificaciones;
		function __construct(){
				$this->calificaciones=new Calificaciones();
		}
		function index(){

		}
		function __destruct(){

		}
	}
?>
