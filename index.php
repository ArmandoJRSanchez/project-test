<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ruta = isset($_GET['ruta']) ? $_GET['ruta'] : header('Location:index.php?ruta=principal');




include_once './controllers/views.controller.php';

echo '<script>
  const ruta = "'.$ruta.'";
</script>';
$accion = new ViewsController();
$accion->crearVista($ruta);


?>
