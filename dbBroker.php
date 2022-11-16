<?php
$host = "localhost";
//naziv baze
$db = "kolokvijumi";
$user = "root";
$pass = "";
//kreiramo conn
$conn = new mysqli($host,$user,$pass,$db);


//ako se desi konekcija sa bazom
if($conn->connect_errno){
    //connect_erno vraca error code poslednjeg connection call-a
    //vraca broj koji se posalje 201, 404...

    exit("Neuspesna konekcija: greska> ".$conn->connect_error.", err kod>".$conn->connect_errno);

    }
?>