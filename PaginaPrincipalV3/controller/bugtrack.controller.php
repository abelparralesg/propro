<?php
require_once 'model/bugtrack.php';

class Controller{
    
    private $model;

    public function __CONSTRUCT(){
        $this->model = new bugtrack();
    }
    
    public function Index(){   
        require_once 'view/bugtrack.php';
    }
}