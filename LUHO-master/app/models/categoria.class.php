<?php
class Categoria extends Validator{
    private $id = null;
    private $nombre = null;
    private $genero = null;
    
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
    
    public function setGenero($value){
		if($this->validateAlphanumeric($value, 1, 1)){
			$this->genero = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getGenero(){
		return $this->genero;
    }
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getCategoria(){
			$sql = "SELECT IdCategoria, Categoria, Genero FROM categoria ORDER BY IdCategoria";
			$params = array();
			return Database::getRows($sql, $params);
			}
			public function getProdxCat(){
				$sql = "SELECT Nombre, Descripcion, Modelo, Costo, Cantidad FROM producto INNER JOIN categoria on producto.IdCategoria=categoria.IdCategoria Where  categoria.IdCategoria=?";
				$params = array($this->id);
				return Database::getRows($sql, $params);
				}
				public function getNombrec(){
					$sql = "SELECT Categoria, COUNT(producto.IdCategoria)Cantidad from categoria INNER JOIN producto on producto.IdCategoria=categoria.IdCategoria GROUP BY Categoria";
					$params = array();
					return Database::getRows($sql, $params);
					}



    public function getCategoriaF(){
		$sql = "SELECT IdCategoria, Categoria, Genero FROM categoria Where Genero='F' ORDER BY IdCategoria";
		$params = array();
		return Database::getRows($sql, $params);
		}
		public function getCategoriaM(){
			$sql = "SELECT IdCategoria, Categoria, Genero FROM categoria Where Genero='M' ORDER BY IdCategoria";
			$params = array();
			return Database::getRows($sql, $params);
			}
	
    //Obtener generos 
		public function getGeneros(){
			$sql = "SELECT DISTINCT Genero FROM categoria ORDER BY Genero";
			$params = array();
			return Database::getRows($sql, $params);
			}
    //Buscar categoria con parametros
    public function searchCategoria($value){
		$sql = "SELECT * FROM categoria WHERE Categoria LIKE ? OR Genero LIKE ? ORDER BY Categoria";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createCategoria(){
		$sql = "INSERT INTO categoria(Categoria, Genero) VALUES(?, ?)";
		$params = array($this->nombre, $this->genero);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readCategoria(){
		$sql = "SELECT Categoria, Genero FROM categoria WHERE IdCategoria = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['Categoria'];
			$this->genero = $categoria['Genero'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateCategoria(){
		$sql = "UPDATE categoria SET Categoria = ?, Genero = ? WHERE IdCategoria = ?";
		$params = array($this->nombre, $this->genero, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteCategoria(){
		$sql = "DELETE FROM categoria WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>