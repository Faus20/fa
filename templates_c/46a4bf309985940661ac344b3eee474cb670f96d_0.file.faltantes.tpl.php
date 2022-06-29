<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:33:08
  from 'C:\xampp\htdocs\proyectos\web2-base-parcial-loberia2021\templates\faltantes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4c5a44da008_43671079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a4bf309985940661ac344b3eee474cb670f96d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-base-parcial-loberia2021\\templates\\faltantes.tpl',
      1 => 1623508347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4c5a44da008_43671079 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
  <thead>
    <tr>
      <th scope="col-12">Cantidad de divisiones con faltantes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cantidad']->value, 'cant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cant']->value) {
?>
        <tr>  
          <td>Cantidad: <?php echo $_smarty_tpl->tpl_vars['cant']->value->cantidad;?>
</td>
        </tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table><?php }
}
