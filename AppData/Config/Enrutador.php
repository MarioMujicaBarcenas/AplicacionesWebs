<?php 
namespace AppData\Config;

class Enrutador
	{
		public static function run(Request $request)
		{
			$controlador = $request->getControlador(). "Controler";
			$ruta = ROOT . "AppData" . DS . "Controler" . DS . $controlador .".php";
			$metodo = $request->getArgumento();
			$argumento = $request->getArgumento();


			if (is_readable($ruta)) 
			{
				require_once($ruta);
				$mostrar = "AppData\\Controler\\" . $controler;
				$controlador = new $master;
				if (!isset($argumento)) 
				{
					$datos = call_user_func(array($controlador, $metodo));
				}
				else
				{
					$datos = call_user_func(array($controlador,$metodo),$argumento);
				}
				if ($request->getMetodo() !="modificar") 
				{
					$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
					if (is_readable($ruta)) 
					{
						require_once($ruta);
					}
					else
						if ($request->getMetodo() == "eliminar" || $request->getMetodo() == "actualizar" || $request->getMetodo() == "crear") 
						{
							$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . "tabla" . ".php";
							if (is_readable($ruta)) 
							{
								require_once($ruta);
							}
							else
								echo "Esta pagina no existe";
						}
				}
				else
					echo(json_encode(mysql_fetch_assoc($datos));
			}
		}
	}
 ?>}
