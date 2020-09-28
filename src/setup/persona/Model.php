<?php


class Model
{
    private $db;
    private $personas;


    public function __construct(){
        $host = "setup_db";
        $username = "myUser";
        $password = "myUser";
        $dbname = "mydb";
        $port = "3306";
        $dsn = "mysql:host=$host;dbname=$dbname";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
//        $this->db=Conectar::db();
        $this->db = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
        $this->personas=array();
    }
    public function get_personas(){

        $consulta = $this->db->query("select * from personas");
        $data = $consulta->fetchAll(PDO::FETCH_OBJ);

//        var_export($data[0]);
//        $consulta->setFetchMode(PDO::FETCH_ASSOC);
//        $tables = $consulta->fetch();
//        $this->personas = array_map(function ($d){
//            return $d;
//        }, $consulta);

//        foreach( as $row) {
//            $this->personas += $row;
////            var_export($row);
//        }
//        $this->personas = $consulta->fetch(PDO::FETCH_ASSOC);
//        var_export($this->personas);
//        $consulta = null;
//        $data =$consulta->execute();

//        while($filas=$consulta->execute()){
//            $this->personas[]=$filas;
//        }
//        var_dump($this->personas);
        return $data;
    }

    /*public function get_personas(){

        $consulta = $this->db->query("select * from personas;");
        $this->personas = array_map(function ($d){
            return $d;
        }, $consulta->query());
        $consulta = null;
//        $data =$consulta->execute();
        var_dump($this->personas);
//        while($filas=$consulta->execute()){
//            $this->personas[]=$filas;
//        }
        return $this->personas;
    }*/

}