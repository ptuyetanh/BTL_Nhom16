<?php
class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $password = "";
    private $database = "twitter";


    public function getConnect(){
        $conn = new mysqli($this->host,$this->user,
        $this->password,$this->database);
        if($conn->connect_error){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ" .
            $conn->connect_error);
        }else{
            return $conn;
        }
        }
    }

?>