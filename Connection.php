<?php 

class Connection {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'library';
    public $conn;
    //Bookクラスから継承されたクラス、データベース操作を可能にする
    //データベースを提供するconnectionクラスを定義している

    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        // データベースへの接続を提供

        if($this->conn->connect_error){
            die("Connection error". $this->conn->connect_error);
        }
    }


}