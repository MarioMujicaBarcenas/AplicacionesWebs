<?php
  namespace AppData\Controller;
  use AppData\Model\index;
  class HomeController{
    private $home;
    function __construct(){
      $this->home=new index();
    }
    function index(){

    }
    function __destruct(){
      
    }
  }

 ?>
