<?php
class Compra extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $fecha = null;
	private $idusuario = null;

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
	
	public function setFecha($value){
		if($this->validateAlphanumeric($value, 10, 10)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setIdUsuario($value){
		if($this->validateId($value)){
			$this->idusuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdUsuario(){
		return $this->idusuario;
	}

	//Metodos para el manejo del CRUD
	public function getComprass(){
		$sql = "SELECT compra.IdCompra from compra WHERE compra.EstadoCompra=0";
		$params = array(null);
		return Database::executeRow($sql, $params);
    }
	//Insertar compra
    public function createCompra(){
		$sql = "INSERT INTO compra(Fecha, IdUsuario, EstadoCompra) VALUES(?, ?, 0)";
		$params = array($this->fecha, $this->idusuario);
		return Database::executeRow($sql, $params);
    }
    //Leer compra
    public function readCompra(){
		$sql = "SELECT Fecha, IdUsuario FROM compra WHERE IdCompra = ?";
		$params = array($this->id);
		$compra = Database::getRow($sql, $params);
		if($compra){
			$this->fecha = $compra['Fecha'];
			$this->idusuario = $compra['IdUsuario'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar compra
    public function updateCompra(){
		$sql = "UPDATE compra SET Fecha = ?, IdUsuario = ? WHERE IdCompra = ?";
		$params = array($this->fecha, $this->idusuario, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar compra
	public function deleteCompra(){
		$sql = "DELETE FROM compra WHERE Idompra = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>