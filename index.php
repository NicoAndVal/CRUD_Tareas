<?php
   require('vendor/autoload.php');

   require_once 'controlador/plantilla.controlador.php';
   require_once 'modelos/formulario.modelo.php';
   require_once 'controlador/formulario.controlador.php';



   $plantilla = new ControladorPlantilla();
   $plantilla -> ctrTraerPlantilla();