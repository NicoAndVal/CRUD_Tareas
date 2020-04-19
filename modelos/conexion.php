<?php

   Class Conexion{
       static public function conectar(){

        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);

        $conn = new mysqli($server, $username, $password, $db);

        return $conn;
        //    $link = new PDO("mysql:host=localhost;dbname=crud_tareas","root","");
        //    $link ->exec('set names utf8');

        //    return $link;
       }
   }
?>

