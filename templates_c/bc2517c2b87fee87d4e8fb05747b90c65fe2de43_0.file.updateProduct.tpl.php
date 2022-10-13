<?php
/* Smarty version 4.2.1, created on 2022-10-10 00:58:22
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/updateProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63436e2ea23ee6_20116793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2517c2b87fee87d4e8fb05747b90c65fe2de43' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/updateProduct.tpl',
      1 => 1665363313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63436e2ea23ee6_20116793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="updateProduct" method="POST">
<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
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

    <button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>
<?php }
}
