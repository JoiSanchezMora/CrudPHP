<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
</head>
<body>
    <div class="container">
        <form method="post" action="?c=guardar">
            <div class="row">
                <div class="col m12">
                    <div class="card green black-text center-align">
                        <h2>Listado de zapatos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Precio :</div>
                <div class="col m4">
                    <input type="hidden" name="txtID" value="<?php echo $nuevo->id_zapato; ?>">
                    <input type="text" name="txtPrecio" value="<?php echo $nuevo->precio; ?>">
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Color :</div>
                <div class="col m4">
                    <input type="text" name="txtColor" value="<?php echo $nuevo->color; ?>">
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Estilo :</div>
                <div class="col m4">
                    <select name="cmbEstilo" id="">
                        <?php foreach($this->model->listarEstilos() as $key): ?>
                            <option value="<?php echo $key->id_estilo;?>" <?php echo $key->id_estilo == $nuevo->id_estilo ? 'selected' : ''?>><?php echo $key->estilo;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Talla :</div>
                <div class="col m4">
                    <select name="cmbTalla" id="">
                        <?php foreach($this->model->listarTalla() as $key): ?>
                            <option value="<?php echo $key->id_talla;?>" <?php echo $key->id_talla == $nuevo->id_talla ? 'selected' : ''?>><?php echo $key->talla;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Genero :</div>
                <div class="col m4">
                    <select name="cmbGenero" id="">
                        <?php foreach($this->model->listarGenero() as $key): ?>
                            <option value="<?php echo $key->id_genero;?>" <?php echo $key->id_genero == $nuevo->id_genero ? 'selected' : ''?>><?php echo $key->genero;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m2"></div>
                <div class="col m4 center-align flow-text">Cantidad :</div>
                <div class="col m4">
                    <input type="text" name="txtCantidad" value="<?php echo $nuevo->cantidad; ?>">
                </div>
                <div class="col m2"></div>
            </div>

            <div class="row">
                <div class="col m3"></div>
                <div class="col m6">
                    <input type="submit" value="Guardar" class="btn blue">
                </div>
                <div class="col m3"></div>
            </div>

        </form>
    </div>

    <script type="text/javascript" src="Resources/js/jquery.js"></script>
    <script type="text/javascript" src="Resources/js/materialize.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>