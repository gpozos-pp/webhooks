
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geenius Store</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Geenius Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
            <a class="btn btn-primary" href="mis-pedidos.php" role="button">Mis pedidos</a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="col-md-12">

      <div class="panel panel-default">
      <!-- Default panel contents -->
        <div class="panel-heading">Resumen</div>
          <table class="table">
            <thead>
              <tr>
                <th>Imágen</th>
                <th>Item</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody id="tbody-items">
              
              <!--items to be rendered here -->

            </tbody>
          </table>

      </div>

      <div align="right" id="paypal-button-container"></div>

    </div>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/parse-1.6.14.min.js"></script>
    <script src="js/resumen.js"></script>

  </body>
</html>
