<?php

    class Session{

        function __construct()
        {
            
        }

        function connectionSession(){
            if(!isset($_SESSION)){
                session_start();
            }

            if(isset($_SESSION['idUser'])){

            }else{
                echo 'Desconectado';

                echo " <script>
                alert('no esta autenticado');
                window.location='login';
                  </script>";            
            }
        }
    }
?>