<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/12/2018
 * Time: 3:39 PM
 */
namespace AppData\Config;

class
    {
         public static function run()
            {
                spl_autoload_register(function($class)
                {
                    $ruta=str_replace("\\",'/',$class).'.php';
                    require_once ($ruta);
                });
            }
    }
