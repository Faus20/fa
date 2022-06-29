<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:33:11
  from 'C:\xampp\htdocs\proyectos\web2-base-parcial-loberia2021\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4c5a759a102_67160407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b24996980075e0bf68dfb9a646c3aa6b29f9fba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-base-parcial-loberia2021\\templates\\admin.tpl',
      1 => 1623508330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formulario_agregar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60c4c5a759a102_67160407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
    <div class="row">
         <div class="col-12">
             <?php $_smarty_tpl->_subTemplateRender("file:formulario_agregar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
