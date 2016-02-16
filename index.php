<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->2
    <style type="text/css">
    .fondo{
      background-image: url(img/fondos/6.jpg);
    }
    .morado{
      color:#5f3788;
    }
    .nav .nav-tabs > a {
      color:#5f3788 !important;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>
        <img src="img/logo_poder3000.png" alt="No Image" width="100" style="margin-right: 100px">
        <small style="color:#4b3364">La confianza en si mismo es el primer secreto del exito</small>
        </h1>
      </div>
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Inicio</a></li>
        <li role="presentation"><a href="#">Perfil</a></li>
        <li role="presentation"><a href="#">Miembros</a></li>
        <li role="presentation"><a href="#">Clases</a></li>
        <li role="presentation"><a href="#">Mensajes</a></li>
        <li role="presentation"><a href="#">Noticias</a></li>
        <li role="presentation"><a href="#">Contacto</a></li>
      </ul>
      <hr>
      <div class="row fondo">
        <div class="col-md-3">
          <div class="row">
         
            <div class="col-md-8">
              <center>
                <span class="morado"><h4>Bienvenido</h4></span>
              </center>
              <a href="#" class="thumbnail">
                <img src="img/perfil.png" alt="PERFIL">
              </a>
              <center>
                <span class="morado">
                  <p>ID: 0001</p>
                  <p>Dr. Rafael</p>
                  <p>Guia</p>
                </span>
              </center>
            </div>
           

          </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">
              <center><h4>Clases</h4></center>
            </div>

            <!-- Table -->
            <table class="table">
              <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th colspan="3">Accion</th>
              </thead>
              <tbody>
                <?php for ($i=0; $i < 9 ; $i++) : ?> 
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo "Nombre numero ".$i ?></td>
                    <td><?php echo "Fecha numero ".$i ?></td>
              
                    <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>
                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-book"></span></button>
                      </div>
                    </td>
                  </tr>
                <?php endfor; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>