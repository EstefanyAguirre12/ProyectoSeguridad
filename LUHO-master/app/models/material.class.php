<?php
class Material extends Validator{
    private $id = null;
    private $nombre = null;
    
    //Métodos para sobrecarga de propiedades
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
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
	
	public function getProdxMat(){
		$sql = "SELECT Nombre, Descripcion, Modelo, Costo, Cantidad FROM producto INNER JOIN material on producto.IdMaterial=material.IdMaterial Where  material.IdMaterial=?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
	}

	public function getCantidadM(){
		$sql = "SELECT Material, COUNT(producto.IdMaterial)Cantidad from Material INNER JOIN producto on producto.IdMaterial=Material.IdMaterial GROUP BY Material";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

    //Metodos CRUD
	public function getMaterial(){
		$sql = "SELECT IdMaterial, Material FROM Material ORDER BY Material";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchMaterial($value){
			$sql = "SELECT * FROM Material WHERE Material LIKE ?  ORDER BY Material";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
	
    //Insertar Material
    public function createMaterial(){
		$sql = "INSERT INTO material(Material) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Material
    public function readMaterial(){
		$sql = "SELECT Material FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		$material = Database::getRow($sql, $params);
		if($material){
			$this->nombre = $material['Material'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Material
    public function updateMaterial(){
		$sql = "UPDATE material SET Material = ? WHERE IdMaterial = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Material
	public function deleteMaterial(){
		$sql = "DELETE FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>