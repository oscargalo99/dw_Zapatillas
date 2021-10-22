<?php

/**
 * Description of ZapatillaDAO
 *
 * @author oscar
 */

require_once(dirname(__FILE__) . '/../conf/PersistentManager.php');

class ZapatillaDAO {
    
    const ZAPATILLA_TABLE = 'zapatillas';
    
    private $conn = null;

    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    
    public function selectAll() {
        $query = "SELECT * FROM " . ZapatillaDAO::ZAPATILLA_TABLE;
        $result = mysqli_query($this->conn, $query);
        $zapatillas = array();
        while ($zapatillaBD = mysqli_fetch_array($result)) {

            $zapatilla = new zapatilla();
            $zapatilla->setIdZapatilla($zapatillaBD["idZapatilla"]);
            $zapatilla->setMarca($zapatillaBD["marca"]);
            $zapatilla->setTalla($zapatillaBD["talla"]);
            $zapatilla->setColor($zapatillaBD["color"]);
            $zapatilla->setDescripcion($zapatillaBD["descripcion"]);
            $zapatilla->setFoto($zapatillaBD["foto"]);
            
            array_push($zapatillas, $zapatilla);
        }
        return $zapatillas;
    }
    
    public function insert($zapatilla) {
        $query = "INSERT INTO " . ZapatillaDAO::ZAPATILLA_TABLE .
                "(marca, talla, color, descripcion, foto) VALUES(?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $marca = $zapatilla->getMarca();
        $talla = $zapatilla->getTalla();
        $color = $zapatilla->getColor();
        $descripcion = $zapatilla->getDescripcion();
        $foto = $zapatilla->getFoto();
        
        mysqli_stmt_bind_param($stmt, 'sssss', $marca, $talla, $color, $descripcion, $foto);
        return $stmt->execute();
    }
    
    public function selectById($id) {
        $query = "SELECT marca, talla, color, descripcion, foto FROM " . ZapatillaDAO::ZAPATILLA_TABLE . " WHERE idZapatilla=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $marca, $talla, $color, $descripcion, $foto);

        $zapatilla = new Zapatilla();
        while (mysqli_stmt_fetch($stmt)) {
            $zapatilla->setIdZapatilla($id);
            $zapatilla->setMarca($marca);
            $zapatilla->setTalla($talla);
            $zapatilla->setColor($color);
            $zapatilla->setDescripcion($descripcion);
            $zapatilla->setFoto($foto);
       }

        return $zapatilla;
    }
    
    public function update($zapatilla) {
        $query = "UPDATE " . ZapatillaDAO::ZAPATILLA_TABLE .
                " SET marca=?, talla=?, color=?, descripcion=?, foto=?"
                . " WHERE idZapatilla=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $marca = $zapatilla->getMarca();
        $talla = $zapatilla->getTalla();
        $color = $zapatilla->getColor();
        $descripcion = $zapatilla->getDescripcion();
        $foto = $zapatilla->getFoto();
        $id = $zapatilla->getIdZapatilla();
        mysqli_stmt_bind_param($stmt, 'sssssi', $marca, $talla, $color, $descripcion, $foto, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . ZapatillaDAO::ZAPATILLA_TABLE . " WHERE idZapatilla=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }
    
}