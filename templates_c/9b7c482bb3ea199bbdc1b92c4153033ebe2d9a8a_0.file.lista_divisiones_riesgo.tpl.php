<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:09:17
  from 'C:\xampp\htdocs\proyectos\web2-base-parcial-loberia2021\templates\lista_divisiones_riesgo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4c00dba80c0_21473065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7c482bb3ea199bbdc1b92c4153033ebe2d9a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-base-parcial-loberia2021\\templates\\lista_divisiones_riesgo.tpl',
      1 => 1623506955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4c00dba80c0_21473065 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
  <thead>
    <tr>
      <th scope="col-12">Faltantes</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['divisiones']->value, 'division');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['division']->value) {
?>
    <tr>
      <td>Division: <?php echo $_smarty_tpl->tpl_vars['division']->value->nombre;?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table><?php }
}
