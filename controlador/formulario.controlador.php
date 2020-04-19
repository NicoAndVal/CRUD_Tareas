<?php
   Class ControladorFormulario{
       //Mostrar Tareas
       static public function ctrMostarTareas($item,$valor){

           $tabla = 'tareas';

           $respuesta = ModeloFormulario::mdlMostrarTareas($tabla,$item,$valor);

           return $respuesta;
       }
       //INSERTAR DATOS A LA BASE DE DATOS
       static public function ctrInsetarTarea(){
           if(isset($_POST['tarea'])){
               $tabla = 'tareas';
               $datos = array(
                                'tarea'=>$_POST['tarea'],
                                'dia'=>$_POST['dia'],
                                'hora'=>$_POST['hora'],
                                'categoria'=>$_POST['categoria'],
                                'prioridad'=>$_POST['prioridad'],
                            );

               $respuesta = ModeloFormulario::mdlRegistroTarea($tabla,$datos);

               return $respuesta;             
           }
       }


       static public function ctrActualizarTarea(){
           if(isset($_POST['actualizarTarea'])){
               $tabla ='tareas';
               $datos = array(
                   "id" =>$_POST["idUsuario"],
                   'tarea' =>$_POST['actualizarTarea'],
                   "dia"=>$_POST["actualizarDia"],
                   "hora" =>$_POST["actualizarHora"],
                   "categoria"=>$_POST["actualizarCategoria"],
                   "prioridad"=>$_POST['actualizarPrioridad']
               );

        

               $respuesta = ModeloFormulario::mdlActualizarTarea($tabla,$datos);

               return $respuesta;
           }
       }

        public function ctrEliminarTarea(){
            if(isset($_POST['eliminarRegistro'])){
                    $tabla = 'tareas';
                    $value = $_POST['eliminarRegistro'];


                        $respuesta = ModeloFormulario::mdlEliminarTarea($tabla,$value);


                        if ($respuesta === 'ok') {
                            echo "<script>
                                        if(window.history.replaceState){
                                            console.log('entro')
                                            window.history.replaceState(null, null, window.location.href);
                                        }
                                         window.location='index.php?pagina=inicio';
                                    </script>";
                        }

            }

       }

       //Registrar Usuario
       static public function ctrRegistroUsuario(){
           if(isset($_POST['registroNombre'])){
                $tabla = "usuarios";
                $datos = array(
                            'nombre' => $_POST['registroNombre'],
                            'email'=>$_POST['registroEmail'],
                            'password' => $_POST['registroPassword']
                );

                $respuesta = ModeloFormulario::mdlRegistroUsuario($tabla,$datos);

                // var_dump($respuesta);

                // return $respuesta;
           }

       }

   }
?>