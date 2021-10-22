<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/ZapatillaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Zapatilla.php');

$zapatillaDAO = new ZapatillaDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    deleteAction();
}

function deleteAction() {
    $id = $_GET["id"];

    $zapatillaDAO = new ZapatillaDAO();
    $zapatillaDAO->delete($id);

    header('Location: ../../index.php');
}
?>

