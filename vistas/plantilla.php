<!DOCTYPE html>
<html>

<head>
    <title>Crud de tareas</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <!-- js -->
    <script src="vistas/public/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <!-- //js -->
    <link href='vistas/public/css/style.css' rel="stylesheet" type="text/css" media="all" />

    <link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="main">
        <h1 class="w3layouts_head">Tareas</h1>
        <div class="w3layouts_main_grid">
            <form action="#" method="post" class="w3_form_post">
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Tarea<i>:</i></label>
                        <input type="text" name="Task" placeholder="Ingresa tu tarea" required="">
                    </span>
                </div>
                <div class="agileits_w3layouts_main_grid w3ls_main_grid">
                    <span class="agileinfo_grid">
                        <label>Dia / Hora<i>:</i></label>
                        <div class="agileits_w3layouts_main_gridl">
                            <input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
                        </div>
                        <div class="agileits_w3layouts_main_gridr">
                            <input type="time" name="Time" placeholder=" " required="">
                        </div>
                        <div class="clear"> </div>
                    </span>
                </div>
                <div class="agileits_main_grid w3_agileits_main_grid">
                    <span class="wthree_grid">
                        <label>Categoria<i>:</i></label>
                        <select id="category" name="category" required="">
                            <option value="none">None</option>
                            <option value="laboral">Laboral</option>
                            <option value="personal">Personal</option>
                            <option value="universidad">Universidad</option>
                        </select>
                    </span>
                </div>
                <div class="wthree_main_grid">
                    <span class="agile_grid">
                        <label>Prioridad<i>:</i></label>
                        <select id="priority" name="priority" required="">
                            <option value="high">Alta</option>
                            <option value="low">Media</option>
                            <option value="medium">Baja</option>
                        </select>
                    </span>
                </div>
           
                <div class="w3_main_grid">
                    <div class="w3_main_grid_right">
                        <input type="submit" value="Agregar Tarea">
                    </div>
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
       
    </div>
</body>

</html>