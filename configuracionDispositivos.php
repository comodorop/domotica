<?php
include './Encabezado.php';
?>
<html>
    <head>
        <style>
            .stlconten{
                background-color: white;
                margin-top: -20px
            }
        </style>
    </head>
    <body>
        <div class="container stlconten">
            <div class="col-lg-12">
                <div class="well">
                    <div class="form-group">
                        <label >Nombre del Dispositivo:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre del Dispositivo...">
                    </div>
                    <div class="form-group">
                        <label >Pin:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre del Pin...">
                    </div>
                    <div class="form-group">
                        <label >Tipo:</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Tipo...">
                    </div>
                    <center>
                        <input type="submit"
                               value="Guardar" 
                               class="btn btn-success"
                               title="Guardar Usuario"/>
                        <input type="submit" 
                               value="Cancelar" 
                               class="btn btn-danger"
                               title="Cancelar Usuario"/>
                    </center>
                </div>
                <div style="margin-top: -20px">
                    <?php
                    include './footeer.php';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

