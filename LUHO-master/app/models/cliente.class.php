<?php
class Cliente extends Validator{
    private $id = null;
    private $usuario = null;
    private $tipousuario = null;
    private $nombre = null;
    private $direccion = null;
    private $correo = null;
    private $contrasena = null;
    private $apellido = null;
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

public function setFecha($value){
    $this->fecha = $value;
    return true;
}
public function getFecha(){
    return $this->fecha;
}

 //Metodo para manejar el CRUD
 public function checkCliente(){
    $sql = "SELECT IdCliente, Correo FROM cliente WHERE Usuario = ? and Estado=1";
    $params = array($this->usuario);
    $data = Database::getRow($sql, $params);
    if($data){
        $this->id = $data['IdCliente'];
        $this->correo = $data['Correo'];
        return true;
    }else{
        return false;
    }
}
public function checkContra(){
    $sql = "SELECT Contrasena FROM cliente WHERE IdCliente = ?";
    $params = array($this->id);
    $data = Database::getRow($sql, $params);
    if(password_verify($this->contrasena, $data['Contrasena'])){
        return true;
    }else{
        return false;
    }
}
//Aqui es para cambiar la contrasena
public function changePassword(){
    $hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE cliente SET Contrasena = ? WHERE IdCliente = ?";
    $params = array($hash, $this->id);
    return Database::executeRow($sql, $params);
}
//cerrar sesion
public function logOut(){
    return session_destroy();
}
//obtener clientes
 public function getClientes(){
    $sql = "SELECT IdCliente, Usuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM cliente WHERE Estado=1 ORDER BY Apellido";
    $params = array(null);
    return Database::getRows($sql, $params);
}
//Para buscar clientes
public function searchCliente($value){
    $sql = "SELECT * FROM cliente WHERE Usuario LIKE ? OR Nombre LIKE ?  ORDER BY Usuario";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}
//Crear clientes
public function createCliente(){
    $hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $fecha = date('Y/m/d');
    $sql = "INSERT INTO cliente(IdCliente, Usuario, Nombre, Direccion, Correo, FechaCliente, Apellido, Contrasena, Estado) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, 1)";
    $params = array($this->id, $this->usuario, $this->nombre,  $this->direccion, $this->correo, $this->fecha, $this->apellido, $hash);
    return Database::executeRow($sql, $params);    
}
//Leer clientes
public function readCliente(){
    $sql = "SELECT Usuario, Nombre, IdCliente, Direccion, Correo, Contrasena, Apellido FROM cliente WHERE IdCliente = ? and Estado=1";
    $params = array($this->id);
    $user = Database::getRow($sql, $params);
    if($user){
        $this->usuario = $user['Usuario'];
        $this->nombre = $user['Nombre'];
        $this->idusuario = $user['IdCliente'];
        $this->direccion = $user['Direccion'];
        $this->correo = $user['Correo'];
        $this->contrasena = $user['Contrasena'];
        $this->apellido = $user['Apellido'];
        return true;
    }else{
        return null;
    }
}
//Modificar clientes
public function updateCliente(){
    $sql = "UPDATE cliente SET Usuario = ?, Nombre = ?, Direccion = ?, Correo = ?, Apellido = ? WHERE IdCliente = ?";
    $params = array($this->usuario, $this->nombre, $this->direccion, $this->correo, $this->apellido, $this->id);
    return Database::executeRow($sql, $params);
}
//Eliminar clientes
public function deleteCliente(){
    $sql = "UPDATE cliente SET Estado=0 WHERE IdCliente = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}
public function Recuperar($contrasena){
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE cliente SET Contrasena = ? WHERE Usuario = ?";
    $params = array($hash, $this->usuario);
    return Database::executeRow($sql, $params);
}
}

?>