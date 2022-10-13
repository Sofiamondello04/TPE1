<?php
/* Smarty version 4.2.1, created on 2022-10-12 21:05:46
  from '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/tabla_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63472c2ab6e5b7_14733627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '812f824af3cc6f748f2e2319f1193ad9c9e2cfd7' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/Trabajos-Practicos-Web2/TPE1/templates/tabla_productos.tpl',
      1 => 1665608201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63472c2ab6e5b7_14733627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Talle</td>
            <td>Marca</td>
            <td>Borrar</td>
            <td>Editar</td>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->talle;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_marca;?>
</td>
                <td><a href='deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='goEditProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
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
