<?php

include_once 'config/db.php';


class Usuario extends DB{
    private $id;
    private $nombre;
    private $apellido;
    private $edad;
    private $telefono;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->apellido = $apellido;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getAllUsers(){
        return $this->connect()->query('SELECT * FROM usuarios');
    }

    public function crearUsuario(){
        try 
        {
            $query = $this->connect()
                      ->prepare("INSERT INTO usuarios(nombre, apellido, edad, telefono) VALUES(?, ?, ?, ?)");                      

            $query->execute([$this->nombre, $this->apellido], $this->edad, $this->telefono);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function editarUsuario(){
        try 
        {
            $query = $this->connect()
                      ->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, edad = ?, telefono = ? WHERE id = ?");                      

            $query->execute([$this->nombre, $this->apellido, $this->edad, $this->telefono, $this->id]);
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function eliminarUsuario(){
        try 
        {
           $this->connect()
                      ->query("DELETE FROM usuarios WHERE id = ".$this->id);                      

            
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function getUsuarioUnico(){
        
        
           return $this->connect()->query('SELECT * FROM usuarios WHERE id = '.$this->id);
          
    }
    
    public function getSearch($like){
        return $this->connect()->query("SELECT id, nombre, apellido FROM usuarios WHERE nombre LIKE '%.$like.%' OR apellido LIKE '%.$like.%'");
    }
}

?>