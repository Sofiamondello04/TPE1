<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:28:34
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/editar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63472372b892b1_84210765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce753f2b93c6180b36da6f202dfa36d72d9bfe3c' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/editar_producto.tpl',
      1 => 1665532278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63472372b892b1_84210765 (Smarty_Internal_Template $_smarty_tpl) {
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
                <select name="id_marcaE" class="form-control" 
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
