<?php

//logovanje
//kreiramo klasu user

class User{
    public $id;
    public $username;
    public $password;

    //definisemo konstruktor
    public function __construct($id=null, $username=null, $password=null){
        //u php-u i pythonu definisemo jedan konstruktor
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    //konekcija ce biti msqli tipa
    public static function logInUser($usr, mysqli $conn){
        $query = "SELECT* FROM user WHERE username='$usr->username' and password='$usr->password'";
        //konekcija sa bazom
        //echo $query;
        //konekciju prosledjujemo ovde
        return $conn->query($query);
    }
}
?>