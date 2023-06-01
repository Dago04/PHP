<?php
    class App{
        function __construct()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : null;

            $url = rtrim($url,'/');

            $url = explode('/', $url);

            if(empty($url[0])){
                $archivoController = 'controller/main.php';
                require_once $archivoController;
                $controller= new Main();
                $controller->loadModel('main');
                $controller->render();
                return false;
            }

            $archivoController ='controller/'.$url[0].'.php';
            if(file_exists($archivoController)){
                require_once $archivoController;
                $controller= new $url[0]();
                $controller->loadModel('main');


                
            }
          
        }
       
    }
?>