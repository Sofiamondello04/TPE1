<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:08:09
  from '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/agregar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488c49dd9912_62554969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e14a70b6f516a662fb6d5a292676449d97ad3cc' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/agregar_producto.tpl',
      1 => 1665698887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tabla_productos.tpl' => 1,
  ),
),false)) {
function content_63488c49dd9912_62554969 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de producto-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>

<form action="addProduct" method="POST" class="my-4">

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
                <select name="id_marca" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_marca;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php $_smarty_tpl->_subTemplateRender("file:tabla_productos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
