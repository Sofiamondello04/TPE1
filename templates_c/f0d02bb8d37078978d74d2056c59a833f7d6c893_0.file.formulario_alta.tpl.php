<?php
/* Smarty version 4.2.1, created on 2022-10-11 20:42:08
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/formulario_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345d5200ccef7_06667733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d02bb8d37078978d74d2056c59a833f7d6c893' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/formulario_alta.tpl',
      1 => 1665520815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345d5200ccef7_06667733 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="addProduct" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
<!-- MODIFICAR COMO ACCEDER A LAS MARCAS DE MANERA DINAMICA Y REPASAR LO DE LAS COLUMNAS-->
        <div class="col-3">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marca" class="form-control" 
                    <option>Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input name="precio" type="number" class="form-control">
    </div>

    <div class="form-group">
        <label>Talle</label>
        <input name="talle" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php }
}
