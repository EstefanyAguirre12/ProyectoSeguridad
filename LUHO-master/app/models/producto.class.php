<?php
class Producto extends validator{
    private $id = null;
    private $cantidad = null;
    private $costo = null;
    private $descripcion = null;
    private $idcategoria = null;
    private $idmarca = null;
    private $idmaterial = null;
    private $idocasion = null;
    private $idtalla = null;
    private $img = null;
    private $modelo = null;
    private $nombre = null; 
    private $busqueda =null;

    //Metodos para sobre cargar de las propiedades
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

    public function setCosto($value){
        if($this->validateMoney($value,2)){
            $this->costo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getCosto(){
        return $this->costo;
    }

    public function setCantidad($value){
        if($this->validateInt($value)){
            $this->cantidad = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getCantidad(){
        return $this->cantidad;
    }

    public function setDescripcion($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->descripcion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDescripcion(){
        return $this->descripcion;
    }



    public function setIdcategoria($value){
        if($this->validateId($value)){
            $this->idcategoria = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdcategoria(){
        return $this->idcategoria;
    }

    public function setIdmarca($value){
        if($this->validateId($value)){
            $this->idmarca = $value;
            return true; 
        }
        else{
            return false;
        }
    }
    public function getIdmarca(){
        return $this->idmarca;
    }

    public function setIdmaterial($value){
        if($this->validateId($value)){
            $this->idmaterial = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdmaterial(){
        return $this->idmaterial;
    }

    public function setIdocasion($value){
        if($this->validateId($value)){
            $this->idocasion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdocasion(){
        return $this->idocasion;
    }

    public function setIdTalla($value){
        if($this->validateId($value)){
            $this->idtalla = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdTalla(){
        return $this->idtalla;
    }


   
     public function setImagen($file){
	 	if($this->validateImage($file, $this->img, "../../web/img/productos/", 500, 500)){
	 		$this->img = $this->getImageName();
	 		return true;
	 	}else{
	 		return false;
	 	}
	 }
	 public function getImagen(){
	 	return $this->img;
	 }
	 public function unsetImagen(){
	 	if(unlink("../../web/img/productos/".$this->img)){
	 		$this->img = null;
	 		return true;
	 	}else{
	 		return false;
	 	}
	 }

    public function setImg($value){
        if($this->validateAlphanumeric($value, 1, 600)){
            $this->img = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getImg(){
        return $this->img;
    }

    public function setModelo($value){
        if($this->validateAlphanumeric($value, 1, 50)){
            $this->modelo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getModelo(){
        return $this->modelo;
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

    public function setBusqueda($value){
        if($this->validateAlphanumeric($value, 1, 50)){
            $this->busqueda = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getBusqueda(){
        return $this->busqueda;
    }

    //obtener categoria
    public function getCategoria(){
        $sql = "SELECT IdCategoria, Categoria FROM categoria ORDER BY Categoria";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    //obtner marca
    public function getMarca(){
        $sql = "SELECT IdMarca, Marca FROM marca ORDER BY Marca";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    //obtener material
    public function getMaterial(){
        $sql = "SELECT IdMaterial, Material FROM material ORDER BY Material";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    //obtener ocasion
    public function getOcasion(){
        $sql = "SELECT IdOcasion, Ocasion FROM ocasion ORDER BY Ocasion";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    //obtener tallas
    public function getTallas(){
        $sql = "SELECT IdTalla, Talla FROM talla ORDER BY Talla";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
    //obtener productos
    public function getProductos(){
		$sql = "SELECT p.Valoracion, p.IdProducto, P.Nombre, P.Modelo, P.Descripcion, P.Costo, c.Categoria, ma.Material, m.Marca, o.Ocasion, t.Talla, p.Cantidad, p.Img FROM producto P, categoria C, material ma, marca m, ocasion o, talla t WHERE p.IdCategoria=c.IdCategoria and p.IdMarca= m.IdMarca and p.IdOcasion=o.IdOcasion and p.IdMaterial= ma.IdMaterial and p.IdTalla= t.IdTalla";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    //obtener nombre d elos productos
    public function getCategoriaNombre(){
        $sql = "SELECT c.Categoria, p.IdProducto, p.Nombre, p.Descripcion, p.Costo, p.Img, p.Valoracion FROM categoria c, producto p Where c.IdCategoria = p.IdCategoria and p.IdCategoria=?";
        if($this->getBusqueda() != null){
            $sql = $sql . " AND (p.Nombre LIKE '%" . $this->getBusqueda() . "%');";
        }
        $params = array($this->idcategoria);
        return Database::getRows($sql, $params);
    }
//buscar producto
public function searchProducto($value){
    $sql = "SELECT p.IdProducto, P.Nombre, P.Modelo, P.Descripcion, P.Costo, c.Categoria, ma.Material, m.Marca, o.Ocasion, t.Talla, p.Cantidad, p.Img FROM producto P, categoria C, material ma, marca m, ocasion o, talla t WHERE p.IdCategoria=c.IdCategoria and p.IdMarca= m.IdMarca and p.IdOcasion=o.IdOcasion and p.IdMaterial= ma.IdMaterial and p.IdTalla= t.IdTalla and Nombre LIKE ? OR Modelo LIKE ? ORDER BY Nombre";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}
//crear producto
public function createProducto(){
    $sql = "INSERT INTO producto(Nombre, Modelo, Img, IdTalla, IdOcasion, IdMaterial, IdMarca, IdCategoria, Descripcion, Costo, Cantidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->nombre, $this->modelo, $this->img, $this->idtalla, $this->idocasion, $this->idmaterial, $this->idmarca, $this->idcategoria, $this->descripcion, $this->costo, $this->cantidad);
    return Database::executeRow($sql, $params);
}
//leer producto
public function readProductos(){
    $sql = "SELECT p.IdProducto, P.Nombre, P.Modelo, P.Descripcion, P.Costo, ma.Material, m.Marca, o.Ocasion, t.Talla, p.Cantidad, p.Img FROM producto P, categoria C, material ma, marca m, ocasion o, talla t WHERE p.IdCategoria=c.IdCategoria and p.IdMarca= m.IdMarca and p.IdOcasion=o.IdOcasion and p.IdMaterial= ma.IdMaterial and p.IdTalla= t.IdTalla and IdProducto=?";
    $params = array($this->id);
    $producto = Database::getRow($sql, $params);
    if($producto){
        $this->nombre = $producto['Nombre'];
        $this->modelo = $producto['Modelo'];
        $this->img = $producto['Img'];
        $this->idtalla = $producto['Talla'];
        $this->idocasion = $producto['Ocasion'];
        $this->idmaterial = $producto['Material'];
        $this->idmarca = $producto['Marca'];
        $this->descripcion = $producto['Descripcion'];
        $this->costo = $producto['Costo'];
        $this->cantidad = $producto['Cantidad'];
        return true;
    }
    else{
        return null;
    }
}
//leer producto
public function readProducto(){
    $sql = "SELECT Nombre, Modelo, Img, IdTalla, IdOcasion, IdMaterial, IdMarca, IdCategoria, Descripcion, Costo, Cantidad FROM producto WHERE IdProducto = ?";
    $params = array($this->id);
    $producto = Database::getRow($sql, $params);
    if($producto){
        $this->nombre = $producto['Nombre'];
        $this->modelo = $producto['Modelo'];
        $this->img = $producto['Img'];
        $this->idtalla = $producto['IdTalla'];
        $this->idocasion = $producto['IdOcasion'];
        $this->idmaterial = $producto['IdMaterial'];
        $this->idmarca = $producto['IdMarca'];
        $this->idcategoria = $producto['IdCategoria'];
        $this->descripcion = $producto['Descripcion'];
        $this->costo = $producto['Costo'];
        $this->cantidad = $producto['Cantidad'];
        return true;
    }
    else{
        return null;
    }
}
//modificar producto
public function updateProducto(){
    $sql = "UPDATE producto SET Nombre = ?, Modelo = ?, Img = ?, IdTalla = ?, IdOcasion = ?, IdMaterial = ?, IdMarca = ?, IdCategoria = ?, Descripcion = ?, Costo = ?, Cantidad = ? WHERE IdProducto = ?";
    $params = array($this->nombre, $this->modelo, $this->img, $this->idtalla, $this->idocasion, $this->idmaterial, $this->idmarca, $this->idcategoria, $this->descripcion, $this->costo, $this->cantidad, $this->id);
    return Database::executeRow($sql, $params);
}
//eliminar producto
public function deleteProducto(){
    $sql = "DELETE FROM producto WHERE IdProducto = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}

}
?>