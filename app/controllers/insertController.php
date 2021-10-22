<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/ZapatillaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Zapatilla.php');
require_once(dirname(__FILE__) . '/../../app/models/validations/ValidationsRules.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    createAction();
}

function createAction() {
    $marca = ValidationsRules::test_input($_POST["marca"]);
    $talla = ValidationsRules::test_input($_POST["talla"]);
    $color = ValidationsRules::test_input($_POST["color"]);
    $descripcion = ValidationsRules::test_input($_POST["descripcion"]);
    $foto = ValidationsRules::test_input($_POST["foto"]);
    
    $zapatilla = new Zapatilla();
    $zapatilla->setMarca($_POST["marca"]);
    $zapatilla->setTalla($_POST["talla"]);
    $zapatilla->setColor($_POST["color"]);
    $zapatilla->setDescripcion($_POST["descripcion"]);
    $zapatilla->setFoto($_POST["foto"]);


    $zapatillaDAO = new ZapatillaDAO();
    $zapatillaDAO->insert($zapatilla);
    
    header('Location: ../../index.php');
    
}
?>

