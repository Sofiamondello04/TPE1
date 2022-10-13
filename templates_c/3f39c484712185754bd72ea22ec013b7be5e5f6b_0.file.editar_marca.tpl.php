<?php
/* Smarty version 4.2.1, created on 2022-10-11 21:29:15
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/editar_marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345e02b404b65_92654777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f39c484712185754bd72ea22ec013b7be5e5f6b' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/editar_marca.tpl',
      1 => 1665522206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6345e02b404b65_92654777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<form action="editBrand" method="POST">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" id="id" required>
<div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
               
                <input name="nombreE" type="text" class="form-control">
            </div>
        </div>
        
<input type="submit" class="btn btn-primary" value="Editar">
    
</form>
<?php }
}
