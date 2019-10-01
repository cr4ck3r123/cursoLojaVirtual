<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 * armazena diversas informações do sistema/loja
 * @author Fernando
 */
class Config {
    /*
     * Informações do banco de dados =========
     * 
     */
    
    protected $BANCO_HOST = "localhost";
    protected $BANCO_USER = "root";
    protected $BANCO_SENHA = "";
    protected $BANCO_BD = "sistemaloja17";

    /*
     * 
     * informações do site =================
     */
   //url do site 
    const SITE_URL = "http://localhost";
    //pasta padrao do  site
    const SITE_PASTA = "loja";
    //nome do site e email do administrador do site
    const SITE_NOME = "Mini loja PHP";
    const SITE_EMAIL_ADM = "contato@gmail.com";
        
    /*
     * Dados do servidor de EMAIL
    */
    const EMAIL_HOST = "";
    const EMAIL_USER = "";
    const EMAIL_NOME = "";
    const EMAIL_SENHA = "";
    const EMAIL_PORTA = "";
    const EMAIL_SMTPAUTH = "";
    const EMAIL_SMTPSECURE = "";
    
    
}
