<?php
class Tipoenvio extends validator{
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
    //Metodos CRUD
	public function getTipoenvio(){
		$sql = "SELECT IdTipoEnvio, TipoEnvio FROM TipoEnvio ORDER BY TipoEnvio";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchTipoenvio($value){
			$sql = "SELECT * FROM TipoEnvio WHERE TipoEnvio LIKE ?  ORDER BY TipoEnvio";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
	
    //Insertar tipo envio
    public function createTipoenvio(){
		$sql = "INSERT INTO TipoEnvio(tipoenvio) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer tipo envio
    public function readTipoenvio(){
		$sql = "SELECT TipoEnvio FROM TipoEnvio WHERE IdTipoEnvio = ?";
		$params = array($this->id);
		$tipoenvio = Database::getRow($sql, $params);
		if($tipoenvio){
			$this->nombre = $tipoenvio['TipoEnvio'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar tipo envio
    public function updateTipoenvio(){
		$sql = "UPDATE tipoenvio SET TipoEnvio = ? WHERE IdTipoEnvio = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar tipo envio
	public function deleteTipoenvio(){
		$sql = "DELETE FROM tipoenvio WHERE IdTipoEnvio = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>