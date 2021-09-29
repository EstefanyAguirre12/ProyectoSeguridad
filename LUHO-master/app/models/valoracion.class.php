<?php
class Valoracion extends Validator{
    private $id = null;
    private $idcliente = null;
    private $idproducto = null;
    private $idvaloracion = null;
    private $valoracion = null;

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

public function setIdValoracion($value){
    if($this->validateIdValoracion($value)){
        $this->idvaloracion = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getIdValoracion(){
    return $this->idvaloracion;
}

public function setValoracion($value){
    if($this->validateInt($value)){
        $this->valoracion = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getValoracion(){
    return $this->valoracion;
}

//obtener valoracion
public function getValoraciones(){
    $sql = "SELECT IdValoracion, valoracion FROM Valoraciones ORDER BY valoracion";
    $params = array(null);
    return Database::getRows($sql, $params);
}
//buscar valoracion
public function searchValoracion($value){
    $sql = "SELECT * FROM v.IdCliente WHERE TipoUsuario=2 AND (Usuario LIKE ? OR Nombre LIKE ?)  ORDER BY Usuario";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}
//crear valoracion
public function createValoracion(){
    $sql = "INSERT INTO valoraciones(IdCliente, IdProducto, valoracion) VALUES(?, ?, ?)";
    $params = array($this->idcliente, $this->idproducto, $this->valoracion);
    return Database::executeRow($sql, $params);    
}
//leer valoracion
public function readValoracion(){
    $sql = "SELECT IdCliente, IdProducto, IdValoracion, valoracion FROM valoraciones WHERE IdValoracion = ?";
    $params = array($this->id);
    $user = Database::getRow($sql, $params);
    if($user){
        $this->idcliente = $valoracion['IdCliente'];
        $this->idproducto = $valoracion['IdProducto'];
        $this->valoracion = $valoracion['valoracion'];
        return true;
    }else{
        return null;
    }
}
//modificar valoracion
public function updateValoracion(){
    $sql = "UPDATE valoraciones SET IdCliente = ?, IdProducto = ?, valoracion = ? WHERE IdValoracion = ?";
    $params = array($this->idcliente, $this->idproducto, $this->valoracion, $this->id);
    return Database::executeRow($sql, $params);
}
//eliminar valoracion
public function deleteValoracion(){
    $sql = "DELETE FROM valoraciones WHERE IdValoracion = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}
}

?>