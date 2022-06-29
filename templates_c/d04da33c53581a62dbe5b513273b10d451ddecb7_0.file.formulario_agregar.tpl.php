<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-12 16:26:49
  from 'C:\xampp\htdocs\proyectos\web2-base-parcial-loberia2021\templates\formulario_agregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c4c429a923b5_87276535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd04da33c53581a62dbe5b513273b10d451ddecb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-base-parcial-loberia2021\\templates\\formulario_agregar.tpl',
      1 => 1623507985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c4c429a923b5_87276535 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="agregar">
  <div class="mb-3">
    <h1>Agregar division</h1>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre division:</label>
    <input type="name" class="form-control"  name="nombre">
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Tiene faltante:</label>
     <select name="faltante">
            <option value= 1 >Si</option>
            <option value= 0 >No</option>
     </select>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
