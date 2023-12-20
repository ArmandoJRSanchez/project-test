<?php
class ModeloVista {
    private $vistas = ['principal', 'contacto', 'acercade', 'confidencialidad'];

    public function validarVista($ruta){
        if(in_array($ruta, $this->vistas)){
            if(is_file("./views/view-".$ruta.".php")){
                include_once './views/complementos/header.php';
                include_once './views/view-'.$ruta.'.php';
                include_once './views/complementos/footer.php';
            }else{
                include_once './views/404.html';
            }
        }else{
            include_once './views/404.html';
        }
    }
}
?>