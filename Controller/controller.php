<?php
include_once('Model/zapato.php');

class Controller{

    public $model;

    public function __construct(){

        $this->model = new Zapato();
        
    }

    public function index(){
        include_once 'View/home.php';
    }

    public function nuevo(){

        $nuevo = new Zapato();
        if(isset($_REQUEST['id'])){

            $nuevo=$this->model->cargar($_REQUEST['id']);

        }
        include_once 'View/nuevo.php';
    }

    public function guardar(){
        $nuevo = new Zapato();
        $nuevo->id_zapato=$_POST['txtID'];
        $nuevo->precio=$_POST['txtPrecio'];
        $nuevo->color=$_POST['txtColor'];
        $nuevo->id_estilo=$_POST['cmbEstilo'];
        $nuevo->id_talla=$_POST['cmbTalla'];
        $nuevo->id_genero=$_POST['cmbGenero'];
        $nuevo->cantidad=$_POST['txtCantidad'];

        $nuevo->id_zapato >0 ? $this->model->actualizar($nuevo) : $this->model->registrar($nuevo);
        header("Location:index.php");

    }

    public function eliminar(){
        $this->model->delete($_REQUEST['id']);
        header("Location:index.php");
    }
}

?>