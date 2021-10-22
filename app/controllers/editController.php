<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/ZapatillaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Zapatilla.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $id = $_POST["id"];
    $marca = $_POST["marca"];
    $talla = $_POST["talla"];
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];
    $foto = $_POST["foto"];

    $zapatilla = new Zapatilla();
    $zapatilla->setIdZapatilla($id);
    $zapatilla->setMarca($marca);
    $zapatilla->setTalla($talla);
    $zapatilla->setColor($color);
    $zapatilla->setDescripcion($descripcion);
    $zapatilla->setFoto($foto);

    $zapatillaDAO = new ZapatillaDAO();
    $zapatillaDAO->update($zapatilla);

    header('Location: ../../index.php');
}

?>

