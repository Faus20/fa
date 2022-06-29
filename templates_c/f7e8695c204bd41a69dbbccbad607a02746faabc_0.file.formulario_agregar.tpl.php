<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-17 17:17:29
  from '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/formulario_agregar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60f2f4890646c8_99910207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e8695c204bd41a69dbbccbad607a02746faabc' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/web2-base-parcial-loberia2021/templates/formulario_agregar.tpl',
      1 => 1626532716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f2f4890646c8_99910207 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="agregar">
  <div class="mb-3">
    <h1>Agregar alumno</h1>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="name" class="form-control"  name="nombre">
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label">Edad:</label>
    <input type="number" class="form-control"  name="edad">
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">telefono:</label>
    <input type="tel" class="form-control"  name="telefono">
  </div>
  <div class="mb-3">
     <label for="aprobado" class="form-label">Aprobado:</label>
     <select name="aprobado">
            <option value= 1 >Si</option>
            <option value= 0 >No</option>
     </select>
  </div>
  <div class="mb-3">
     <label for="recursante" class="form-label">Recursante:</label>
     <select name="recursante">
            <option value= 1 >Si</option>
            <option value= 0 >No</option>
     </select>
  </div>
  <div class="mb-3">
    <select name="vehiculo" class="form-select">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehiculos']->value, 'vehiculo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vehiculo']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['vehiculo']->value->nombre;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form><?php }
}
