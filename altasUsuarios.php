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
        <script>
            $(document).ready(function() {
                $("#guardar").click(function() {
                    var datos = 'nombre=' + $('#nombre').val() +
                            '&usuario=' + $('#usuario').val() +
                            '&pass=' + $('#pass').val() +
                            '&status=' + $("#status").val();
                    $.get('guardarUsuario.php', datos, function() {
                        alertify.success("Exito! Usuario dado de Alta");
                        limpiar();
                    });
                });

                function limpiar() {
                    $('#nombre').val('');
                    $('#usuario').val('');
                    $('#pass').slideDown('slow');
                }
            });

        </script>
    </head>
    <body>
        <div class="container stlconten">
            <div class="col-lg-12">
                <div class="well">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Staus:</label>
                        <select id="status" class="form-control">
                            <option>Status</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                            <option value="3">Invitado</option>
                        </select>
                    </div>
                    <center>
                        <input type="submit"
                               id="guardar"
                               value="Guardar" 
                               class="btn btn-success"
                               title="Guardar Usuario"/>
                        <input type="submit" 
                               id="cancelar"
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

