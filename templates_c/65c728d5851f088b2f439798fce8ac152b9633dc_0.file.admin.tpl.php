<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-17 17:17:29
  from '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60f2f489039662_85845518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65c728d5851f088b2f439798fce8ac152b9633dc' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/admin.tpl',
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
function content_60f2f489039662_85845518 (Smarty_Internal_Template $_smarty_tpl) {
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
