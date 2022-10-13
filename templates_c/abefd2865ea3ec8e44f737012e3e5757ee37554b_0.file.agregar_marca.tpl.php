<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:43:15
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/agregar_marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634726e3d18825_89733032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abefd2865ea3ec8e44f737012e3e5757ee37554b' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/agregar_marca.tpl',
      1 => 1665607316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634726e3d18825_89733032 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de marca-->

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>

<form action="addBrand" method="POST" class="my-4">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                
                <label>Nombre</label>
                <input name="nombre_marca" type="text" class="form-control">
            </div>
        </div>
    <div class="row">
        <div class="col-3">
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>
    </div>
</form>
<?php }
}
