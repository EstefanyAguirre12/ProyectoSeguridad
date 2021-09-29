<?php
class DetalleCompra extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $total = null;
	private $idcompra = null;
	private $idcarrito = null;

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

    public function setTotal($value){
		if($this->validateMoney($value)){
			$this->total = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTotal(){
		return $this->total;
    }
    
    public function setIdCompra($value){
		if($this->validateId($value)){
			$this->idcompra = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCompra(){
		return $this->idcompra;
    }

    public function setIdCarrito($value){
		if($this->validateId($value)){
			$this->idcarrito = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCarrito(){
		return $this->idcarrito;
    }
	

	//Metodos para el manejo del CRUD
	//Insertar detalle compra
    public function createDetCompra(){
		$sql = "INSERT INTO detallecompra(IdCompra, IdCarrito, Total) VALUES(?, ?, ?)";
		$params = array($this->idcompra, $this->idcarrito, $this->total);
		return Database::executeRow($sql, $params);
    }
    //Leer detalle compra
    public function readDetCompra(){
		$sql = "SELECT IdCompra, IdCarrito, Total FROM detallecompra WHERE IdDetalle = ?";
		$params = array($this->id);
		$detalle = Database::getRow($sql, $params);
		if($detalle){
			$this->idcompra = $detalle['IdCompra'];
			$this->idproducto = $detalle['IdCarrito'];
			$this->total = $detalle['Total'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar detalle compra
    public function updateDetCompra(){
		$sql = "UPDATE detallecompra SET IdCompra = ?, IdCarrito = ?, Total = ? WHERE IdDetalle = ?";
		$params = array($this->idcompra, $this->idcarrito, $this->total, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar detalle compra
	public function deleteDetCompra(){
		$sql = "DELETE FROM detallecompra WHERE IdDetalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>