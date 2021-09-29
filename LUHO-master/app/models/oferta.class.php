<?php 
class Oferta extends validator{
    private $id = null;
    private $nombre = null;
    private $descuento = null;
    private $idproducto = null;

    //Metodos para sobrecarga de las propiedades
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
        if($this->validateAlphanumeric($value, 1, 200)){
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

    public function setDescuento($value){
        if($this->validateMoney($value)){                     //No se cual poner!
            $this->descuento = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDescuento(){
        return $this->descuento;
    }

    public function setIdproducto($value){
        if($this->validateId($value)){
            $this->idproducto = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdproducto(){
        return $this->idproducto;
    }

    //Metodos CRUD
	public function getOferta(){
		$sql = "SELECT IdOferta, IdProducto, Descuento, Descripcion FROM Oferta ORDER BY Descripcion";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchOferta($value){
			$sql = "SELECT * FROM Oferta WHERE Descripcion LIKE ?  ORDER BY Descripcion";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
        }
        public function getProductos(){
			$sql = "SELECT IdProducto, Nombre FROM producto ORDER BY Nombre";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
    //Insertar oferta
    public function createOferta(){
		$sql = "INSERT INTO oferta(IdProducto,Descuento,Descripcion) VALUES(?,?,?)";
		$params = array($this->idproducto,$this->descuento,$this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer oferta
    public function readOferta(){
		$sql = "SELECT IdProducto, IdOferta, Descuento, Descripcion FROM Oferta WHERE IdOferta = ?";
		$params = array($this->id);
		$oferta = Database::getRow($sql, $params);
		if($oferta){
            $this->idproducto = $oferta['IdProducto'];
            $this->idoferta = $oferta['IdOferta'];
            $this->descuento = $oferta['Descuento'];
            $this->nombre = $oferta['Descripcion'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar oferta
    public function updateOferta(){
		$sql = "UPDATE oferta SET IdProducto = ?, Descuento = ?, Descripcion = ? WHERE IdOferta = ?";
        $params = array($this->idproducto, $this->descuento, $this->nombre, $this->id);
        
		return Database::executeRow($sql, $params);
    }
    //Eliminar oferta
	public function deleteOferta(){
		$sql = "DELETE FROM Oferta WHERE IdOferta = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}

?>