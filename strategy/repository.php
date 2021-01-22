<?php


class Repository {
private $_dsn;
private $_user;
private $_password;
private static $pdo;

    public function __construct(){
        $this->_dsn = 'mysql:host=localhost;dbname=myecommerce';
        $this->_user =  'mohtadi';
        $this->_password = 'Estocolmo1';
        self::$pdo = new PDO($this->_dsn,$this->_user, $this->_password);
    }

    public function executeQuery ( $id  ){
        $conn = self::$pdo->prepare('select * from products where id = :id');
        $conn->bindValue(':id',$id);
        $conn->execute();
        $rows = $conn->fetchAll(PDO::FETCH_ASSOC) ;
        return $rows;
    }
}

