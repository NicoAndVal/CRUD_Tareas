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

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/58934181eb.js" crossorigin="anonymous"></script>

</head>

<body>
</body>

</html>
<!-- Contenido  -->
<?php
if (isset($_GET['pagina'])) {
    if (
        $_GET['pagina'] === 'tareas' ||
        $_GET['pagina'] === 'editar' ||
        $_GET['pagina'] === 'inicio' 
    ) {
        include "public/paginas/" . $_GET['pagina'] . ".php";
    } else {
        include "public/paginas/error404.php";
    }
} else {
    include "public/paginas/inicio.php";
}

?>