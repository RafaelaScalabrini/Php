<?php
/**
 * Classe de login
 *
 * Classe com as funcionalidades b�sicas para um sistema de login de usu�rio
 *
 * @author		Rafaela Scalabrini
 */

class Login {

    private $tabela, $campoID, $campoLogin, $campoSenha;

    function  __construct($tabela = 'usuario', $campoID = 'usuario_id', $campoLogin = 'login', $campoSenha = 'senha') {

            // Iniciando sess�o
            session_start();

            // Definindo atributos
            $this->tabela = $tabela;
            $this->campoID = $campoID;
            $this->campoLogin = $campoLogin;
            $this->campoSenha = $campoSenha;
    }

    // ------------------------------------------------------------------------

    /**
	 * Retornando login do usu�rio que est� na sess�o
	 *
	 * @access	public
	 * @return	string
	 */

    function getLogin() {
        return $_SESSION[$this->campoLogin];
    }

    // ------------------------------------------------------------------------

    /**
	 * Retornando ID do usu�rio que est� na sess�o
	 *
	 * @access	public
	 * @return	integer
	 */

    function getID() {
        return $_SESSION[$this->campoID];
    }

    // ------------------------------------------------------------------------

    /**
	 * Trata as informa��es recebidas, procura o usu�rio no banco de dados e, se encontrado,
         * registra as informa��es na sess�o.
	 *
	 * @access	public
         * @param	string
	 * @param	string
         * @param	string
	 * @return	boolean
	 */

    function logar($login, $senha, $redireciona = null) {
        // Tratando as informa��es
        $login = mysql_real_escape_string($login);
        $senha = mysql_real_escape_string($senha);

        // Verifica se o usu�rio existe
        $query = mysql_query("SELECT {$this->campoID}, {$this->campoLogin}, {$this->campoSenha}
                             FROM {$this->tabela}
                             WHERE {$this->campoLogin} = '{$login}' AND {$this->campoSenha} = '{$senha}'");

        // Se encontrado um usu�rio
        if(mysql_num_rows($query) > 0)
        {
            // Instanciando usu�rio
            $usuario = mysql_fetch_object($query);

            // Registrando sess�o
            $_SESSION[$this->campoID] = $usuario->{$this->campoID};
            $_SESSION[$this->campoLogin] = $usuario->{$this->campoLogin};
            $_SESSION[$this->campoSenha] = $usuario->{$this->campoSenha};

            // Se informado redirecionamento
            if ($redireciona !== null){
                header("Location: {$redireciona}");
                return true;
            }
            else
                return false;
        }
        else
            return false;
    }

    // ------------------------------------------------------------------------

    /**
	 * Verifica se o usu�rio est� logado
	 *
	 * @access	public
         * @param	string
	 * @return	boolean
	 */

    function verificar($redireciona = null) {
        // Se as sess�es estiverem setadas
        if(isset($_SESSION[$this->campoID]) and isset($_SESSION[$this->campoLogin]) and isset($_SESSION[$this->campoSenha]))
            return true;
        else
        {
            // Se informado redirecionamento
            if ($redireciona !== null)
                header("Location: {$redireciona}");

            return false;    
        }

    }

    // ------------------------------------------------------------------------

    /**
	 * Finaliza a sess�o do usu�rio
	 *
	 * @access	public
         * @param	string
	 * @return	void
	 */

    function logout($redireciona = null) {
        // Limpa a Sess�o
        $_SESSION = array();
        // Destroi a Sess�o
        session_destroy();
        // Modifica o ID da Sess�o
        session_regenerate_id();
        // Se informado redirecionamento
        if ($redireciona !== null)
            header("Location: {$redireciona}");
    }

}
