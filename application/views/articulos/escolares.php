<hr>
<h1 Align="center">LISTADO DE ARTICULOS ESCOLARES</h1>
<hr>
<br>
<?php if ($articulos) : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>DESCRIPCION</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulos as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo $filaTemporal->id_esc; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nombre_esc; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->precio_esc; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->cantidad_esc; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->descripcion_esc; ?>
                    </td>

                    <td class="text-center">
                        <a href="#" title="Editar Articulo Escolar"><i class="glyphicon  glyphicon-pencil"></i>
                        </a>
                        <a href="<?php echo site_url(); ?>/Articulos/eliminarEsc/<?php echo $filaTemporal->id_esc;?>" title="Eliminar Articulo Escolar" style="color:red;">
                            <i class="glyphicon  glyphicon-trash"></i>
                        </a>

                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
<?php else : ?>
    <h1>No posee Articulos Escolares</h1>
<?php endif; ?>