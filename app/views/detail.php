<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/ZapatillaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Zapatilla.php');


//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $zapatillaDAO = new ZapatillaDAO();
    $zapatilla = $zapatillaDAO->selectById($id);
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Zapatillas: Desarrollo web - PHP</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
         <!-- Navigation -->
        <nav class="navbar navbar-light navbar-fixed-top  navbar-expand-md bg-faded" role="navigation" style="background-color: #e3f2fd;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <a class="navbar-brand" href="../../index.php"> <img src="../../assets/img/small-logo.png" alt="" ></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                      <a type="button" class="btn btn-info " href="insert.php">Crear una zapatilla</a>
                    </li>
                  </ul>
                    
                </div>
              </nav>
         
     
        <!-- Page Content -->
        <div class="container">

            <div class="card" >
           <img class="card-img-top rounded mx-auto d-block avatar" src='<?php echo $zapatilla->getFoto() ?>' alt="Card image cap">
            <div class="card-block">
                <h2 class="card-title"> <?php echo $zapatilla->getMarca() ?></h2>
                <p class=" card-text description"> <?php echo  $zapatilla->getTalla()?></p>
                <p class=" card-text description"> <?php echo  $zapatilla->getColor()?></p>
                <p class=" card-text description"> <?php echo  $zapatilla->getDescripcion()?></p>
             </div>
              <div  class=" btn-group card-footer" role="group">
              <a type="button" class="btn btn-success" href="edit.php?id=<?php echo $zapatilla->getIdZapatilla() ?>">Modificar</a> 
                <a type="button" class="btn btn-danger" href="../controllers/deleteController.php?id=<?php  echo $zapatilla->getIdZapatilla()?>">Borrar</a> 
             </div>
         </div>
            
          

            <!-- Footer -->
           <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; A. F. 2017</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="../../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../assets/js/bootstrap.min.js"></script>
    </body>

</html>


