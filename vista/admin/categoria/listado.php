<?php require "vista/admin/menu.php"; ?>
<style>
.contenedor {
    padding: 20px;
}

.contenedor .row {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    margin-bottom: 10px;
}

.btn:hover {
    background-color: #0056b3;
}

.table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.table th, .table td {
    padding: 12px 15px;
    text-align: left;
}

.table thead {
    background-color: #0E273C;
    color: #fff;
    text-align: left;
    font-weight: bold;
}

.table tbody tr {
    border-bottom: 1px solid #ddd;
}

.table tbody tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

.table tbody tr:last-of-type {
    border-bottom: 2px solid #0E273C;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.table a {
    margin-right: 10px;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    transition: color 0.3s;
}

.table a:hover {
    color: #0056b3;
}

.table .action-links a {
    display: inline-block;
    padding: 5px 10px;
    color: #fff;
    background-color: #548C2F;
    border-radius: 5px;
    text-decoration: none;
}

.table .action-links a:hover {
    background-color: #0056b3;
}

.table .action-links a.eliminar {
    background-color: #dc3545;
}

.table .action-links a.eliminar:hover {
    background-color: #c82333;
}

</style>
<div class="contenedor">
   <div class="row justify-content-center">
        <div class="col-sm-8 border">
            <a href="<?php echo urlsite ?>?page=categoria&opcion=form_insertar" class="btn">Nuevo</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ORDEN</th>
                        <th>NOMBRE</th>
                        <th>ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $v): ?>
                        <tr>
                            <td><?php echo $v->orden ?> </td>
                            <td><?php echo $v->nombre ?> </td>
                            <td class="action-links">
                                <a href="<?php echo urlsite ?>?page=producto&opcion=listar&id=<?php echo $v->id ?>" class="btn btn-primary">Productos</a>
                                <a href="<?php echo urlsite ?>?page=categoria&opcion=form_editar&id=<?php echo $v->id ?>" class="btn btn-secondary">Editar</a>
                                <a href="<?php echo urlsite ?>?page=categoria&opcion=eliminar&id=<?php echo $v->id ?>" class="btn btn-danger eliminar" onclick="return confirm('SEGURO?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
   </div>
</div>

