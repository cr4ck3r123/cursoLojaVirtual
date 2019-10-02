<?php

class Rotas {

    //define a pasta controler
    private static $pasta_controller = 'controller';
    //define a pasta view
    private static $pasta_view = 'view';
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
            $pagina = self::pasta_controller . self::$pag[0] . '.php';
            // $pagina = 'controller'.$barra.$_GET['pag'] . '.php';
            if (file_exists($pagina)):
                include $pagina;
                echo $pagina;
            else:
                echo 'arquivo não encontrado: ' . $pagina;
                include 'erro.php';
            endif;
        endif;
    }

    /*
     * Retorna pasta home do projeto
     */

    static function get_SiteHOME() {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    /*
     * Retorna a pasta de fotos
     */

    static function get_SiteRAIZ() {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    /*
     * @return string - URL do template do site, css, js
     */

    static function get_SiteTEMA() {
        return self::get_SiteHOME() . '/' . self::$pasta_view;
        //site home = http://locahost/loja
    }

    /**
     * 
     * @return string - pagina carrinho
     */
    static function pag_Carrinho() {
        return self::get_SiteHOME() . '/carrinho';
    }
    
      /**
     * 
     * @return string - pagina alterar carrinho
     */
    static function pag_CarrinhoAlterar() {
        return self::get_SiteHOME() . '/carrinho_alterar';
    }
    
    /**
     * 
     * @return string - pagina de manipulação de carrinho 
     */
    static function pag_Produtos() {
        return self::get_SiteHOME() . '/produtos';
    }
    /**
     * 
     * @return string - detalhe do produto
     */
    static function pag_ProdutosInfo() {
        return self::get_SiteHOME() . '/produtos_info';
    }

    /**
     * 
     * @return string - pagina de login
     */
    static function pag_Login() {
        return self::get_SiteHOME() . '/login';
    }
    
     /**
     * 
     * @return string - pagina de recuperação de senha
     */
    static function pag_ClienteRecovery() {
        return self::get_SiteHOME() . '/clientes_senharecover';
    }
    /**
     * 
     * @return string - pagina da conta do cliente
     */
    static function pag_ClienteConta() {
        return self::get_SiteHOME() . '/clientes_minhaconta';
    }

    /**
     * 
     * @return string - pagina de confirmar pedido
     */
    static function pag_PedidoConfirmar() {
        return self::get_SiteHOME() . '/pedidos_confirmar';
    }

    /**
     * 
     * @return string - pagina de finalizar pedido
     */
    static function pag_PedidoFinalizar() {
        return self::get_SiteHOME() . '/pedidos_finalizar';
    }

}
