<?php
class Database {

    private $_connection;
    private static $_instance = null;

    private function __construct() {
        $this->_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Error handling
        if ($this->_connection->connect_error) {
            die("Connection failed: " . $this->_connection->connect_error);
        }
    }

    public static function getInstance(){
        if( !self::$_instance )
            self::$_instance = new self();

        return self::$_instance;
    }

    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

}
?>