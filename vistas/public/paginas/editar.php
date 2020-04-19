 <?php
    if (isset($_GET['id'])) {
        $item = 'id';
        $valor = $_GET['id'];

        $tarea = ControladorFormulario::ctrMostarTareas($item, $valor);
    }
    ?>

 <div class="main">
     <h1 class="w3layouts_head">Editar Tarea</h1>
     <div class="w3layouts_main_grid">
         <form action="#" method="post" class="w3_form_post">
             <div class="w3_agileits_main_grid w3l_main_grid">
                 <span class="agileits_grid">
                     <label>Tarea<i>:</i></label>
                     <input type="text" name="actualizarTarea" placeholder="Ingresa tu tarea" required="" value="<?php echo $tarea['tarea']; ?>">
                 </span>
             </div>
             <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                 <span class="agileinfo_grid">
                     <label>Dia / Hora<i>:</i></label>
                     <div class="agileits_w3layouts_main_gridl">
                         <input value="<?php echo $tarea['dia']; ?> " class="date" id="datepicker" name="actualizarDia" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                     </div>
                     <div class="agileits_w3layouts_main_gridr">
                         <input type="time" name="actualizarHora" placeholder=" " required="" value="<?php echo $tarea['hora']; ?>">
                     </div>
                     <div class="clear"> </div>
                 </span>
             </div>
             <div class="agileits_main_grid w3_agileits_main_grid">
                 <span class="wthree_grid">
                     <label>Categoria<i>:</i></label>
                     <select id="category" name="actualizarCategoria" required="">
                         <option value="<?php echo $tarea['categoria']; ?>" disabled='true' selected=true> <?php echo $tarea['categoria']; ?></option>
                         <option value="ninguna">None</option>
                         <option value="laboral">Laboral</option>
                         <option value="personal">Personal</option>
                         <option value="universidad">Universidad</option>
                     </select>
                 </span>
             </div>
             <div class="wthree_main_grid">
                 <span class="agile_grid">
                     <label>Prioridad<i>:</i></label>
                     <select id="priority" name="actualizarPrioridad" required="">
                         <option value="<?php echo $tarea['prioridad']; ?>" disabled='true' selected=true> <?php echo $tarea['prioridad']; ?></option>
                         <option value="alta">Alta</option>
                         <option value="media">Media</option>
                         <option value="baja">Baja</option>
                     </select>
                 </span>
             </div>

             <?php
                $actualizar = ControladorFormulario::ctrActualizarTarea();

                if ($actualizar === 'ok') {
                    echo "<script>
                             if(window.history.replaceState){
                                 console.log('entro')
                                 window.history.replaceState(null, null, window.location.href);
                             }
                         </script>";

                    echo "<div class='alert alert-success'>Usuario actualizado exitosamente</div>
                         <script>
                            setTimeout(()=>{
                              window.location='index.php?pagina=inicio';
                            },1500)
                         </script>";
                }
                ?>

             <div class="w3_main_grid">
                 <div class="w3_main_grid_right">
                     <input type="submit" value="Actualiza Tarea">
                 </div>
                 <input type='hidden' value="<?php echo $tarea['id']; ?>" name='idUsuario'>
                 <div class="clear"> </div>
             </div>
         </form>
     </div>
     <!-- Calendar -->
     <link rel="stylesheet" href="vistas/public/css/jquery-ui.css" />
     <script src="vistas/public/js/jquery-ui.js"></script>
     <script>
         $(function() {
             $("#datepicker").datepicker();
         });
     </script>