<hr>
<h1 Align="center">LISTADO DE ARTICULOS LIBROS</h1>
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
                        <?php echo $filaTemporal->id_lib; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->nombre_lib; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->precio_lib; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->cantidad_lib; ?>
                    </td>
                    <td>
                        <?php echo $filaTemporal->descripcion_lib; ?>
                    </td>

                    <td class="text-center">
                        <a href="#" title="Editar Instructor"><i class="glyphicon  glyphicon-pencil"></i>
                        </a>
                        <a href="<?php echo site_url(); ?>/Articulos/eliminarLib/<?php echo $filaTemporal->id_lib;?>" title="Eliminar Instructor" style="color:red;">
                            <i class="glyphicon  glyphicon-trash"></i>
                        </a>

                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
<?php else : ?>
    <h1>No posee Instructores</h1>
<?php endif; ?>