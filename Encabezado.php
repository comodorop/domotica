<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootsTrap/css/bootstrap-theme.css"/>
        <link rel="stylesheet" type="text/css" href="bootsTrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="bootsTrap/css/bootstrap.min.css"/>
        
        <script src="bootsTrap/js/jquery.min.js"></script>
        <script src="bootsTrap/js/bootstrap.js"></script>
        <script src="alertify/lib/alertify.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12">
                <nav class="navbar navbar-inverse" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Domotica</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex8-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Configuracion Personal</a></li>
                            <li><a href="altasUsuarios.php">Altas Usuarios</a></li>
                            <li><a href="configuracionDispositivos.php">Configuracion Dispositivos</a></li>
                            <li><a href="" data-toggle="modal" data-target="#myModal" title="Iniciar Sesión"><span class="glyphicon glyphicon-user"></span></a></li>
                            <li><a title="Cerrar Sesión"><span class="glyphicon glyphicon-off"></span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </body>
</html>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Acceso a la Casa</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="Usuario"/>
                <br>
                <input type="text" class="form-control" placeholder="Contraseña"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Iniciar Session</button>
            </div>
        </div>
    </div>
</div>
