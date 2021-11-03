<?php
class talla extends validator{
    private $id = null;
    private $nombre = null;

    //Metodos para sobrecarga de propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getId(){
        return $this->id;
    }

    public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
            $this->nombre = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getProdxTa(){
		$sql = "SELECT Nombre, Descripcion, Modelo, Costo, Cantidad FROM producto INNER JOIN talla on producto.IdTalla=talla.IdTalla Where  talla.IdTalla=?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
	}

	public function getCantidadT(){
		$sql = "SELECT Talla, COUNT(producto.IdTalla)Cantidad FROM talla INNER JOIN producto on producto.IdTalla=Talla.IdTalla GROUP BY Talla";
		$params = array();
		return Database::getRows($sql, $params);
	}
    //Metodos CRUD
	public function getTalla(){
		$sql = "SELECT IdTalla, Talla FROM talla ORDER BY Talla";
		$params = array();
		return Database::getRows($sql, $params);
		}
		public function searchTalla($value){
			$sql = "SELECT * FROM talla WHERE Talla LIKE ?  ORDER BY Talla";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar talla
    public function createTalla(){
		$sql = "INSERT INTO talla(Talla) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer talla 
    public function readTalla(){
		$sql = "SELECT Talla FROM talla WHERE IdTalla = ?";
		$params = array($this->id);
		$talla = Database::getRow($sql, $params);
		if($talla){
			$this->nombre = $talla['Talla'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar talla
    public function updateTalla(){
		$sql = "UPDATE talla SET Talla = ? WHERE IdTalla = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar talla
	public function deleteTalla(){
		$sql = "DELETE FROM talla WHERE IdTalla = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>