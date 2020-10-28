<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapateria</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="card green black-text center-align">
                    <h2>Listado de zapatos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <table class="table-responsive black-text">
                    <tr class="green">
                        <th class="black-text center-align">Id</th>
                        <th class="black-text center-align">Precio</th>
                        <th class="black-text center-align">Color</th>
                        <th class="black-text center-align">Estilo</th>
                        <th class="black-text center-align">Talla</th>
                        <th class="black-text center-align">Genero</th>
                        <th class="black-text center-align">Cantidad</th>
                        <th class="black-text center-align">Eliminar</th>
                        <th class="black-text center-align">Actualizar</th>
                    </tr>
        
                    <?php foreach($this->model->listar() as $key): ?>
                            <tr>
                                <td class="black-text center-align"><?php echo $key->id_zapato;?></td>
                                <td class="black-text center-align"><?php echo $key->precio;?></td>
                                <td class="black-text center-align"><?php echo $key->color;?></td>
                                <td class="black-text center-align"><?php echo $key->estilo;?></td>
                                <td class="black-text center-align"><?php echo $key->talla;?></td>
                                <td class="black-text center-align"><?php echo $key->genero;?></td>
                                <td class="black-text center-align"><?php echo $key->cantidad;?></td>
                                <td class="center-align"><a href="?c=eliminar&id=<?php echo $key->id_zapato;?>" class="btn red">X</a></td>
                                <td class="center-align"><a href="?c=nuevo&id=<?php echo $key->id_zapato;?>" class="btn orange">E</a></td>
                            </tr>
                    <?php endforeach; ?>
                    
                </table>

                <a href="?c=nuevo" class="btn btn-block blue">Nuevo</a>
            </div>
        </div>
    </div>
</body>
</html>