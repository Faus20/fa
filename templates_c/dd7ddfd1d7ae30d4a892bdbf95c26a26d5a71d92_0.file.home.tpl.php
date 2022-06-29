<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:33:08
  from 'C:\xampp\htdocs\proyectos\web2-base-parcial-loberia2021\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4c5a444d649_78872149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7ddfd1d7ae30d4a892bdbf95c26a26d5a71d92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-base-parcial-loberia2021\\templates\\home.tpl',
      1 => 1623508385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:lista_divisiones_riesgo.tpl' => 1,
    'file:faltantes.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c4c5a444d649_78872149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
    <div class="row">
         <div class="col-8">
            <?php $_smarty_tpl->_subTemplateRender("file:lista_divisiones_riesgo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
         <div class="col-4">
            <?php $_smarty_tpl->_subTemplateRender("file:faltantes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
    </div>
</div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
