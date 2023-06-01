<style>
       h1 {
        margin-top: 10px;
        padding: 12px;
        background-color: #996e02;
        border-radius: 22px;
        color: white;

    }
</style>

<h1 Align="center">AGREGAR ARTICULOS DE TECNOLOGIA</h1>
<br>
<form class="" action="OJO" method="post">
    <div class="row">
        <div class="col-md-4">
            <label for="">Nombre:</label>
            <br>
            <input type="text" placeholder="Ingrese el nombre del producto" class="form-control" name="primer_apellido_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Precio:</label>
            <br>
            <input type="number" placeholder="Ingrese precio del producto" class="form-control" name="segundo_apellido_ins" value="">
        </div>
        <div class="col-md-4">
            <label for="">Cantidad:</label>
            <br>
            <input type="number" placeholder="Ingrese la cantidad del articulo que posee" class="form-control" name="nombres_ins" value="">
        </div>
        
        <div class="col-md-12">
            <label for="">Descripción:</label>
            <br>
            <input type="text" placeholder="Describir brevemente el articulo" class="form-control" name="direccion_ins" value="">
        </div>
    </div>
    <br>
    <div class="col-md-12 text-center">
        <button type="submit" name="button" class="btn btn-primary">
            GUARDAR
        </button>
        &nbsp;
        <a href="<?php echo site_url();?>" class="btn btn-danger">CANCELAR</a>
    </div>
</form>