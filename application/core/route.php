<?php

class Route
{

	static function start()
	{
    function multiexplode ($delimiters,$data) {
	$MakeReady = str_replace($delimiters, $delimiters[0], $data);
	$Return    = explode($delimiters[0], $MakeReady);
	return  $Return; 
}
            $controller_name = 'main';
            $action_name = 'index';

            $routes = multiexplode(array("/","?"), $_SERVER['REQUEST_URI']);

            if ( !empty($routes[2]) ) 
               { if($routes[2] != 'index.php') { 
               $controller_name = $routes[2]; 
                   } 

               } 
            if ( !empty($routes[3]) ) 
             { 
               $action_name = $routes[3]; 
                   } 

            $model_name = 'Model_'.$controller_name;
            $controller_name = 'Controller_'.$controller_name;
            $action_name = 'action_'.$action_name; 



            $model_file = strtolower($model_name).'.php';
            $model_path = "application/models/".$model_file;
            if(file_exists($model_path))
            {
			include "application/models/".$model_file;
            }

            $controller_file = strtolower($controller_name).'.php';
            $controller_path = "application/controllers/".$controller_file;
            if(file_exists($controller_path))
            {
			include "application/controllers/".$controller_file;
            }
          

            $controller = new $controller_name;
            $action = $action_name; 
            if(method_exists($controller, $action))
            {
                    $controller->$action();
            }
           
	
	}

        }
    
