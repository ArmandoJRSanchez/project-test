<?php
include_once './models/views.model.php';
class ViewsController {

    public function crearVista($ruta) {
        $modelo = new ModeloVista();
        $modelo->validarVista($ruta);
        
    }
}

?>