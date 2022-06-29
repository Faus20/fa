<?php
/* Smarty version 3.1.34-dev-7, created on 2022-05-15 20:51:25
  from '/opt/lampp/htdocs/proyectos/TPE-Metodologias/templates/loginPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62814bad93f3a0_19612475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0d6d6b023557ba4a4349247ab09879257c5aeff' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/TPE-Metodologias/templates/loginPaciente.tpl',
      1 => 1652640683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62814bad93f3a0_19612475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row justify-content-center caja_portal">
<div class="card text-center col-6 ">

  <div class="card-body">
  <div class="row justify-content-center">
     <img class="bienvenida" src="imagenes/icon7.png" >
    <h5 class="card-title">Bienvenidx</h5>
    

    <div class="row botones">
    <div class="col-6">
        <a href="#" class="btn ">Mis turnos</a>
        </div>
        <div class="col-6">
        <a href="#" class="btn ">Sacar turno</a>
        </div>
    </div>
  </div>

</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
