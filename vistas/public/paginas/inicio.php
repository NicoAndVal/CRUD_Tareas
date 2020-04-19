<div class="main">
    <h1 class="w3layouts_head">Tareas</h1>
    <div class="w3layouts_main_grid">
        <form action="#" method="post" class="w3_form_post">
            <div class="w3_agileits_main_grid w3l_main_grid">
                <span class="agileits_grid">
                    <label>Tarea<i>:</i></label>
                    <input type="text" name="tarea" placeholder="Ingresa tu tarea" required="">
                </span>
            </div>
            <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                <span class="agileinfo_grid">
                    <label>Dia / Hora<i>:</i></label>
                    <div class="agileits_w3layouts_main_gridl">
                        <input class="date" id="datepicker" name="dia" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                    </div>
                    <div class="agileits_w3layouts_main_gridr">
                        <input type="time" name="hora" placeholder=" " required="">
                    </div>
                    <div class="clear"> </div>
                </span>
            </div>
            <div class="agileits_main_grid w3_agileits_main_grid">
                <span class="wthree_grid">
                    <label>Categoria<i>:</i></label>
                    <select id="category" name="categoria" required="">
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
                    <select id="priority" name="prioridad" required="">
                        <option value="alta">Alta</option>
                        <option value="media">Media</option>
                        <option value="baja">Baja</option>
                    </select>
                </span>
            </div>

            <?php
            $registro = ControladorFormulario::ctrInsetarTarea();

            if ($registro === 'ok') {
                echo "<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null, null, window.history.href);
                            }
                        </script>";
                // echo "<div class='alert alert-success'>La tarea se agrego correctamente</div>";

            }
            ?>

            <div class="w3_main_grid">
                <div class="w3_main_grid_right">
                    <input type="submit" value="Agregar Tarea">
                </div>
                <div class="clear"> </div>
            </div>
        </form>




    </div>

    <!--Contenedro de tareas -->

    <div class="container mt-5 ">
        <div class="row mr-5 justify-content-center">
            <?php
                 $respuesta = ControladorFormulario::ctrMostarTareas(null,null);
            ?>
            <?php foreach ($respuesta as $key => $value) : ?>
                <div class="card col-lg-3 mr-1 mt-3">
                    <div class="card-body">
                        <h4 class="card-title"> <span><i class="fas fa-thumbtack pr-3"></i></span><?php echo $value["tarea"] ?></h4>
                        <p class="card-text">Dia: <?php echo $value["dia"]; ?> </p>
                        <p class="card-text">Categoria: <?php echo $value["categoria"]; ?></p>
                        <p class="card-text">Prioridad: <?php echo $value["prioridad"]; ?></p>
                        <div class="btn-group">
                            <div class="px-1">
                                <a href='index.php?pagina=editar&id=<?php echo $value['id']; ?>' class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                            <form method='POST'>
                                <input type="hidden" value="<?php echo $value['id']; ?>" name="eliminarRegistro">
                                <button type='submit' class="btn btn-danger"> <i class="fas fa-trash-alt"> </i> </button>

                                <?php
                                   $eliminar = new ControladorFormulario();
                                   $eliminar->ctrEliminarTarea();
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- Calendar -->
    <link rel="stylesheet" href="vistas/public/css/jquery-ui.css" />
    <script src="vistas/public/js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>