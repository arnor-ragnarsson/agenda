<?php
class Database {
  private $_connection;
  private static $_instance;
  private $_host = '82.148.66.32';
  private $_username = 'arnor';
  private $_password = 'vskoli';
  private $_database = 'h1';

  public static function getInstance() {
    if(!self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  private function __construct() {
    $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

    //error handling
    if(mysqli_connect_error()) {
      trigger_error('Failed to connect to MySQL: ' . mysqli_connect_error(), E_USER_ERROR);
    }
  }
  private function __clone() { }

  public function getConnection() {
    return $this->_connection;
  }
}

 ?>
