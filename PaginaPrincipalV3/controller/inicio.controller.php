<?php
class InicioController{
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inicio/index.php';
        require_once 'view/footer.php';
        
    }
    
    public function IndexAcerdaD(){

        require_once 'view/header.php';
        require_once 'view/acerca_de/parte_AD.php';
        require_once 'view/footer.php';
        
    }

}