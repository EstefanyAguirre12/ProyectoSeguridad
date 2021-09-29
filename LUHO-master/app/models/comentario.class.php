<?php 
class Comentario extends validator{
    private $id = null;
    private $idproducto = null;
    private $idcomentario = null;
    private $idcliente = null;
    private $estado = null;
    private $comentario = null; 

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

    public function setIdProducto($value){
        if($this->validateId($value)){
            $this->idproducto = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdProducto(){
        return $this->idproducto;
    }

    public function setIdComentario($value){
        if($this->validateId($value)){                     //No se cual poner!
            $this->idcomentario = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdComentario(){
        return $this->idcomentario;
    }

    public function setIdCliente($value){
        if($this->validateId($value)){
            $this->idcliente = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdCliente(){
        return $this->idcliente;
    }

    public function setEstado($value){
        if($this->validateInt($value)){
            $this->estado = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setComentario($value){
        if($this->validateAlphanumeric($value, 1, 100)){
            $this->comentario = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getComentario(){
        return $this->comentario;
    }



    //Metodos CRUD
    // obtener comentarios
	public function getComentarios(){
		$sql = "SELECT c.Comentario, cli.Usuario FROM comentarios c, cliente cli, producto p where c.IdCliente=cli.IdCliente and p.IdProducto=c.IdProducto and c.Estado=1";
		$params = array(null);
		return Database::getRows($sql, $params);
        }
        public function getComentarioss(){
            $sql = "SELECT c.IdComentario, c.Comentario, cli.Usuario, p.Nombre FROM comentarios c, cliente cli, producto p where c.IdCliente=cli.IdCliente and p.IdProducto=c.IdProducto and c.Estado=0";
            $params = array(null);
            return Database::getRows($sql, $params);
            }
		public function searchComentario($value){ 
			$sql = "SELECT * FROM comentario WHERE Comentario LIKE ?  ORDER BY Comentario";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
        }

        public function getProductos(){
			$sql = "SELECT IdProducto, Nombre FROM producto ORDER BY Nombre";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
    //Insertar comentario
    public function createComentario(){
		$sql = "INSERT INTO comentarios(IdProducto,IdCliente,Estado,Comentario) VALUES(?,?,0,?)";
		$params = array($this->idproducto,$this->idcliente,$this->comentario);
		return Database::executeRow($sql, $params);
    }
    //Leer comentario
    public function readComentario(){
		$sql = "SELECT IdComentario, IdProducto, IdCliente, Estado, Comentario FROM comentarios WHERE IdComentario = ?";
		$params = array($this->id);
		$comentario = Database::getRow($sql, $params);
		if($comentario){
            $this->idcomentario = $comentario['IdComentario'];
            $this->idproducto = $comentario['IdProducto'];
            $this->idcliente = $comentario['IdCliente'];
            $this->estado = $comentario['Estado'];
            $this->comentario = $comentario['Comentario'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar comentario
    public function updateComentario(){
		$sql = "UPDATE comentarios SET Estado=1 WHERE IdComentario = ?";
        $params = array($this->id);
        
		return Database::executeRow($sql, $params);
    }
    //Eliminar comentario
	public function deleteComentario(){
		$sql = "DELETE FROM Comentarios WHERE IdComentario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}

?>