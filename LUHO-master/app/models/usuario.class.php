<?php
class Usuario extends Validator{
    private $id = null;
    private $usuario = null;
    private $tipousuario = null;
    private $nombre = null;
    private $direccion = null;
    private $correo = null;
    private $contrasena = null;
    private $apellido = null;
    private $id_Cargo = null;
	private $fecha = null;

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
public function getCargo(){
    return $this->id_Cargo;
}
public function setUsuario($value){
    if($this->validateAlphanumeric($value, 1, 60)){
        $this->usuario = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getUsuario(){
    return $this->usuario;
}

public function setTipousuario($value){
    if($this->validateId($value)){
        $this->tipousuario = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getTipousuario(){
    return $this->tipousuario;
}


public function setNombre($value){
    if($this->validateAlphabetic($value, 1, 50)){
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

public function setDireccion($value){
    if($this->validateAlphanumeric($value, 1, 60)){
        $this->direccion = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getDireccion(){
    return $this->direccion;
}

public function setCorreo($value){
    if($this->validateEmail($value)){
        $this->correo = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getCorreo(){
    return $this->correo;
}

public function setContrasena($value){
    if($this->validatePassword($value)){
        $this->contrasena = $value;
        return true;
    }else{
        return false;
    }
}
public function getContrasena(){
    return $this->contrasena;
}

public function setApellido($value){
    if($this->validateAlphabetic($value, 1, 60)){
        $this->apellido = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getApellido(){
    return $this->apellido;
}
//Este es el Fecha-------------------------------------------------------------------
public function setFecha($value){
    $this->fecha = $value;
    return true;
}
public function getFecha(){
return $this->fecha;
}
 //Métodos para manejar la sesión del usuario
 public function checkUsuario(){
    $sql = "SELECT IdUsuario, Correo FROM usuario WHERE Usuario = ?";
    $params = array($this->usuario);
    $data = Database::getRow($sql, $params);
    if($data){
        $this->id = $data['IdUsuario'];
        $this->correo = $data['Correo'];
        return true;
    }else{
        return false;
    }
}

public function checkContra(){
    $sql = "SELECT Contrasena, TipoUsuario FROM usuario WHERE IdUsuario = ?";
    $params = array($this->id);
    $data = Database::getRow($sql, $params);
    if(password_verify($this->contrasena, $data['Contrasena'])==true){
        $this->id_Cargo = $data['TipoUsuario'];
        return true;
    }else{
        return false;
    }
}
public function changePassword(){
    $hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE usuario SET Contrasena = ? WHERE IdUsuario = ?";
    $params = array($hash, $this->id);
    return Database::executeRow($sql, $params);
}
public function logOut(){
    return session_destroy();
}
//obtener usuarios
 public function getUsuarios(){
    $sql = "SELECT IdUsuario, Usuario, TipoUsuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM usuario ORDER BY Apellido";
    $params = array();
    return Database::getRows($sql, $params);
}

//obtener clientes
public function getClientes(){
    $sql = "SELECT IdCliente, Usuario, TipoUsuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM usuario where TipoUsuario=1 ORDER BY Apellido";
    $params = array();
    return Database::getRows($sql, $params);
}
//obtener generos
public function getGeneros(){
    $sql = "SELECT IdTipo, Tipo FROM tipousuario ORDER BY Tipo";
    $params = array();
    return Database::getRows($sql, $params);
}
public function getTipo(){
    $sql = "SELECT * FROM tipousuario ORDER BY Tipo";
    $params = array();
    return Database::getRows($sql, $params);
}
public function getNombreU(){
    $sql = "SELECT Usuario FROM usuario where IdUsuario=?";
    $params = array($this->id);
    return Database::getRows($sql, $params);
}
public function getCorreoU(){
    $sql = "SELECT Correo FROM usuario where Usuario=?";
    $params = array($this->usuario);
    return Database::getRows($sql, $params);
}
//buscar usuarios
public function searchUsuario($value){
    $sql = "SELECT * FROM usuario WHERE TipoUsuario=2 AND (Usuario LIKE ? OR Nombre LIKE ?)  ORDER BY Usuario";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}
//crear usuario
public function createUsuario(){
    $hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $fechacsa = date("Y/m/d");
    $sql = "INSERT INTO usuario(IdUsuario, Usuario, TipoUsuario, Nombre, Direccion, Correo, Apellido, Contrasena, Fecha) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->id, $this->usuario, $this->tipousuario, $this->nombre,  $this->direccion, $this->correo, $this->apellido, $hash, $fechacsa);
    return Database::executeRow($sql, $params);    
}
//leer usuario
public function readUsuario(){
    $sql = "SELECT Usuario, TipoUsuario, Nombre, IdUsuario, Direccion, Correo, Contrasena, Apellido, Fecha FROM usuario WHERE IdUsuario = ?";
    $params = array($this->id);
    $user = Database::getRow($sql, $params);
    if($user){
        $this->usuario = $user['Usuario'];
        $this->tipousuario = $user['TipoUsuario'];
        $this->nombre = $user['Nombre'];
        $this->idusuario = $user['IdUsuario'];
        $this->direccion = $user['Direccion'];
        $this->correo = $user['Correo'];
        $this->contrasena = $user['Contrasena'];
        $this->apellido = $user['Apellido'];
        $this->fecha = $user['Fecha'];
        return true;
    }else{
        return null;
    }
}
//modificar usuario
public function updateUsuario(){
    $sql = "UPDATE usuario SET Usuario = ?, Nombre = ?, Direccion = ?, Correo = ?, Apellido = ? WHERE IdUsuario = ?";
    $params = array($this->usuario, $this->nombre, $this->direccion, $this->correo, $this->apellido, $this->id);
    return Database::executeRow($sql, $params);
}
//eliminar usuario
public function deleteUsuario(){
    $sql = "DELETE FROM usuario WHERE IdUsuario = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}
public function Recuperar($contrasena){
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE usuario SET Contrasena = ? WHERE Usuario = ?";
    $params = array($hash, $this->usuario);
    return Database::executeRow($sql, $params);
}
public function Cactualizado(){
    $sql = "UPDATE usuario SET Fecha = ? WHERE IdUsuario = ?";
    $fecha = date('Y/m/d');
    $params = array($fecha,$this->id);
    return Database::executeRow($sql, $params);
}
}

?>