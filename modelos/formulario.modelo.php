<?php
   require_once 'conexion.php';

   Class ModeloFormulario{

       static public function mdlRegistroTarea($tabla,$datos){
           $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(tarea, dia, hora,categoria,prioridad) VALUES(:tarea,:dia,:hora,:categoria,:prioridad)");

           $stmt->bindParam(":tarea",$datos["tarea"], PDO::PARAM_STR);
           $stmt ->bindParam(":dia",$datos["dia"], PDO::PARAM_STMT);
           $stmt ->bindParam(":hora",$datos["hora"], PDO::PARAM_STMT);
           $stmt ->bindParam(":categoria",$datos["categoria"], PDO::PARAM_STR);
           $stmt ->bindParam(":prioridad",$datos["prioridad"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
   
       }

       static public function mdlMostrarTareas($tabla,$item,$valor){
           if($item===null && $valor===null){
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  ORDER BY id DESC");
                $stmt ->execute();
                return $stmt->fetchAll();
           }else{
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item =:$item ORDER BY id DESC");
                $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetch();
           }
       }

       static public function mdlActualizarTarea($tabla,$datos){


        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET tarea=:tarea , dia=:dia, hora=:hora, categoria=:categoria, prioridad=:prioridad WHERE id=:id");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":tarea", $datos["tarea"], PDO::PARAM_STR);
        $stmt->bindParam(":dia", $datos["dia"], PDO::PARAM_STMT);
        $stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STMT);
        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":prioridad", $datos["prioridad"], PDO::PARAM_STR);


        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        // $stmt->close();
        $stmt = null;
       }

       static public function mdlEliminarTarea($tabla, $valor){
           $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
           $stmt->bindParam(':id',$valor,PDO::PARAM_INT);

           if($stmt->execute()){
               return "ok";
           }else{
               print_r(Conexion::conectar()->errorInfo());
           }

           $stmt=null;
       }

       //REGISTRO DE USUARIOS
       static public function mdlRegistroUsuario($tabla, $datos){
           
           $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,email,password) VALUES (:nombre,:email,:password)");

           $stmt ->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
           $stmt ->bindParam(":email",$datos['email'],PDO::PARAM_STR);
           $stmt ->bindParam(":password",$datos['password'],PDO::PARAM_STR);

           if($stmt->execute()){
               return "ok";
           }else{
               print_r(Conexion::conectar()->errorInfo());
           }

            $stmt=null;
       }
   }
?>