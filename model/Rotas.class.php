<?php

class Rotas {    
    //array recebe os parametros da url
    public static $pag;
    /*
     * Trata paginas e parametros da URL
     * 
     */
    static function get_pagina() {

       /*
        * Verifico se existe parametro na URL
        */
        
        if (isset($_GET['pag'])):
            
            $pagina = $_GET['pag'];       
            self::$pag = explode('/', $pagina);
             $barra = DIRECTORY_SEPARATOR;
            $pagina = 'controller/'.self::$pag[0] . '.php';
           // $pagina = 'controller'.$barra.$_GET['pag'] . '.php';
        
            if (file_exists($pagina)):
                include $pagina;
            echo $pagina;
            else:
                echo 'arquivo não encontrado: '.$pagina;
                include 'erro.php';
            endif;

        endif;
    }

}
