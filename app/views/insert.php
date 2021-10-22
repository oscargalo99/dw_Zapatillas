<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gestión de Zapatillas</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-light navbar-fixed-top navbar-expand-md bg-faded" role="navigation" style="background-color: #e3f2fd;">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="../../index.php"> <img src="../../assets/img/small-logo.png" alt="" ></a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                      <a type="button" class="btn btn-info " href="#">Crear una zapatilla</a>
                    </li>
                  </ul>
                    
                </div>
              </nav>
        <!-- Page Content -->
         <div class="container">
            <form class="form-horizontal" method="post" action="../controllers/insertController.php">
                
                <div class="form-group">
                    <label for="marca" class="col-sm-2 control-label">Marca</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="talla" class="col-sm-2 control-label">Talla</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" name="talla" id="talla" placeholder="Talla" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="color" class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="url" class="form-control" id="descripcion" name="foto" placeholder="Foto" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Insert</button>
                    </div>
                </div>
            </form>

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


