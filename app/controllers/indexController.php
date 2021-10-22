<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/ZapatillaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Zapatilla.php');


function indexAction() {
    $zapatillaDAO = new ZapatillaDAO();
    return $zapatillaDAO->selectAll();
}

?>