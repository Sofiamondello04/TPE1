<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:10:29
  from '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/tabla_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488cd5893e05_52697120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a04d77c01bb2fed019ff03fe6430847872a1959' => 
    array (
      0 => '/Applications/MAMP/htdocs/Web2/13-10/Trabajos-Practicos-Web2/TPE1/templates/tabla_productos.tpl',
      1 => 1665699026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63488cd5893e05_52697120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Talle</td>
            <td>Marca</td>
            <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
            <td>Borrar</td>
            <td>Editar</td>
            <?php }?>
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
                <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
                <td><a href='deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                <td><a href='goEditProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
' type='button' class='btn btn-danger'>Editar</a></td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
