<?php header("content-Type:text/html;charset=utf-8");?>
<<?php
  define('DS',DIRECTORY_SEPARATOR);
  define('ROOT',realpath(dirname(__FILE__)).DS);
  define('URL',"http://localhost/aplicacionesweb");
  require_once("AppData/config/Autoload.php");
  \AppData\config\Autoload::run();
  if (!isset($_SERVER["HTPP_X_REQUEST_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
   {
     Views\Template::header();
     AppData\config\Enrutador::run(new AppData\config\Request());
     Views\Template::nav();
     Views\Template::main();
     Views\Template::footer();
         # code...
  }

 ?>
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/12/2018
 * Time: 3:09 PM
 */
