<?php
/* Smarty version 4.2.1, created on 2022-10-12 21:36:47
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/agregar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6347336f712df7_98999184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e546699386be64821a9345bb1fe11be27c409489' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/agregar_producto.tpl',
      1 => 1665610603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6347336f712df7_98999184 (Smarty_Internal_Template $_smarty_tpl) {
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
                <select name="id_marca" class="form-control" 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_m;?>
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
<?php }
}
