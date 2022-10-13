<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:43:15
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/tabla_marcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634726e3d617c0_09137033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bae6b24a564fac7fd973a5f1a2e34e062bed37' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/tabla_marcas.tpl',
      1 => 1665607369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634726e3d617c0_09137033 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Borrar</td>
            <td>Editar</td>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            
            <tr><td><?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre_marca;?>
</td>
                <td><a href='deleteBrand/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='goEditBrand/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id;?>
' type='button' class='btn btn-danger'>Editar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
        

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
