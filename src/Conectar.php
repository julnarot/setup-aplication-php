<?php


class Conectar
{

    public static function db(){
        $servername = "setup_db";
        $username = "myUser";
        $password = "myUser";
        $dbname = "mydb";
        $port = "3306";
//        $conexion=new mysqli("localhost", "root", "", "mvc");
//        $conexion->query("SET NAMES 'utf8'");
        return new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);;
    }

}