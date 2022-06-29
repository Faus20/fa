<?php
/* Smarty version 3.1.34-dev-7, created on 2022-06-27 20:33:06
  from '/opt/lampp/htdocs/proyectos/Trabajos/TPE-Metodologias/templates/loginPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_62b9f7e271df81_72740654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c5716bb3f84b3b1ab9a8e271a939f678ddb71c0' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Trabajos/TPE-Metodologias/templates/loginPaciente.tpl',
      1 => 1656354542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b9f7e271df81_72740654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row justify-content-center caja_portal">
    <div class="card text-center col-6 caja">

        <div class="card-body">
            <div class="row justify-content-center">
                <h5 class="titulo_sacar_turno">Sacar Turno</h5>
            </div>

            <div class="row">
                <div class="col-6">
                    <!-- Filtro para medicxs por obra social -->
                    <form method="POST" action="filtrarObraSocial" class="me-3">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-floating">
                                    <select name="obra" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="todas" selected>Todas</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obras']->value, 'obra');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obra']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['obra']->value->id_obra_social;?>
"><?php echo $_smarty_tpl->tpl_vars['obra']->value->nombre_largo;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <label for="floatingSelect">Filtrar por obra social</label>
                                </div>
                            </div>
                            <div class="col-2 boton">
                                <button type="submit" class="btn btn-primary "><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col-6">
                    <!-- Filtro para medicxs por especialidad -->
                    <form method="POST" action="filtrarEspecialidad" class="ms-3">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-floating">
                                    <select name="especialidad" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option value="todas" selected>Todas</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <label for="floatingSelect">Filtrar por Especialidad</label>
                                </div>
                            </div>
                            <div class="col-2 boton">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                </div>

                <div>


                </div>
            </div>
            <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medicos']->value, 'medico');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['medico']->value) {
?>
            
                <div class="col-4 mt-4">
                  <div class="card">
                    <div class="card-body">
                    <div class="img-caja">
                    <img src="imagenes/holas.png" class="img-top" alt="...">
                    </div>
                      <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre_medico;?>
</h5>
                     <a href="mostrarTurnos/<?php echo $_smarty_tpl->tpl_vars['medico']->value->id;?>
_medico" class="btn btn-primary">Ver turnos disponibles</a>
                    </div>
                </div>
               
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
