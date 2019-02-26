<?php
require_once 'model/asisbugt.php';

class AsisbugtController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Asisbugt();
    }
    
    public function Index(){
        
        require_once 'view/Asisbugt.php';
        
    }
    public function Guardar(){
        $alm = new Asisbugt();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];

        $alm->id > 0 
            ? $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
}