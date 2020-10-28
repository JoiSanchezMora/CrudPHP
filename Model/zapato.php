<?php

class Zapato{
    
    public $conect;
    public $id_zapato;
    public $precio;
    public $color;
    public $id_estilo;
    public $id_talla;
    public $id_genero;
    public $cantidad;


    public function __construct(){
        try{
            $this->conect = conexion::conectar();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){
        try{
            $query = "SELECT z.id_zapato, z.precio, z.color, e.estilo, t.talla, g.genero, z.cantidad FROM dbzapato z INNER JOIN dbestilo e ON z.id_estilo=e.id_estilo INNER JOIN dbtalla t ON z.id_talla=t.id_talla INNER JOIN dbgenero g ON z.id_genero=g.id_genero";
            $smt = $this->conect->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    

    public function listarEstilos(){
        try{
            $query = "SELECT * FROM dbestilo";
            $smt = $this->conect->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listarTalla(){
        try{
            $query = "SELECT * FROM dbtalla";
            $smt = $this->conect->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listarGenero(){
        try{
            $query = "SELECT * FROM dbgenero";
            $smt = $this->conect->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(Zapato $data){
        try{
            $query = "INSERT INTO dbzapato (precio, color, id_estilo, id_talla, id_genero, cantidad) VALUES (?,?,?,?,?,?)";
            $smt = $this->conect->prepare($query);
            $smt->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function delete($id){
        try{
            $query = "DELETE FROM dbzapato WHERE id_zapato=?";
            $smt = $this->conect->prepare($query);
            $smt->execute(array($id));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function cargar($id){
        try{
            $query = "SELECT * FROM dbzapato WHERE id_zapato=?";
            $smt = $this->conect->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function actualizar($data){
        try{
            $query = "UPDATE dbzapato SET precio=?, color=?, id_estilo=?, id_talla=?, id_genero=?, cantidad=? WHERE id_zapato=?";
            $smt = $this->conect->prepare($query);
            $smt->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad,$data->id_zapato));
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }


}


?>