<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-17 17:17:17
  from '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60f2f47d2d6c62_99353943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b063361de05cd54b9f8b4bb8581a18f37d99c65' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/home.tpl',
      1 => 1626534343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:lista_alumnos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60f2f47d2d6c62_99353943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
    <div class="row">
         <div class="col-12">
            <?php $_smarty_tpl->_subTemplateRender("file:lista_alumnos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
         </div>
    </div>
</div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
