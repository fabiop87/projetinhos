<?php

class conexao
{
    protected $_host = 'localhost';
    protected $_bd = 'p2fabio';
    protected $_user = 'root';
    protected $_pass = '';
    public $pdo;
    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=$this->_host;dbname=$this->_bd", $this->_user, $this->_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "deu ruim" . $e->getMessage();
        }
    }
}
