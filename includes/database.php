<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php

class Database {

    public $dbserver = '';
    public $username = '';
    public $password = '';
    public $database = '';
    public $db = '';

    public function __construct() {
        $this->dbserver = 'localhost';
        $this->username = 'root'; //имя пользователя для доступа к базе данных
        $this->password = ''; //пароль для доступа к базе данных
        $this->database = 'testBlog'; //имя базы данных
        $this->db = new PDO("mysql:host=" . $this->dbserver . ";dbname=" .
                $this->database, $this->username, $this->password);
    }

    public function dbselect($table, $select, $where = NULL) {
        
    }

    public function dbadd($tablename, $insert, $format) {
        
    }

    public function dbupdate($tablename, $insert, $where) {
        
    }

}
