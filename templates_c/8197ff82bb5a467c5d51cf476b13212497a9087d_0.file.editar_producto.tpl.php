<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:31:14
  from '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/editar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634891b2f135f1_18493832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8197ff82bb5a467c5d51cf476b13212497a9087d' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/editar_producto.tpl',
      1 => 1665700235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634891b2f135f1_18493832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>

<form action="editProduct" method="POST">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" id="id" required>
<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
               
                <input name="nombreE" type="text" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Marca</label>
                <select name="id_marcaE" class="form-control" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_m;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre_marca;?>
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
        <input name="precioE" type="number" class="form-control">
    </div>

    <div class="form-group">
        <label>Talle</label>
        <input name="talleE" type="text" class="form-control">
    </div>
<input type="submit" class="btn btn-primary" value="Editar">
    
</form>
<?php }
}
