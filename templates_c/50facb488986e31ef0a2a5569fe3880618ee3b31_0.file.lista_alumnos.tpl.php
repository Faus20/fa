<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-17 17:29:08
  from '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/lista_alumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60f2f7441e8dd0_77619356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50facb488986e31ef0a2a5569fe3880618ee3b31' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/lista_alumnos.tpl',
      1 => 1626535745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2f7441e8dd0_77619356 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
  <thead>
    <tr>
      <th scope="col-12">Alumnos menores 30</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menor30']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
    <tr>
      <td>Alumno: <?php echo $_smarty_tpl->tpl_vars['alumno']->value->nombre;?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col-12">Alumnos mayores de 30 y menores de 50</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mayor30']->value, 'alumno2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno2']->value) {
?>
    <tr>
      <td>Alumno: <?php echo $_smarty_tpl->tpl_vars['alumno2']->value->nombre;?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col-12">Alumnos mayores de 50</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mayor50']->value, 'alumno3');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno3']->value) {
?>
    <tr>
      <td>Alumno: <?php echo $_smarty_tpl->tpl_vars['alumno3']->value->nombre;?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table><?php }
}
