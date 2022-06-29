<?php

require_once('view.php');

class PacienteView extends View {

    public function __construct() {
        parent::__construct();
    }

    public function loginPaciente($especialidad, $obra, $medico){
        $this->getSmarty()->assign('title','Home');
        $this->getSmarty()->assign('obras', $obra);
        $this->getSmarty()->assign('especialidades', $especialidad);
        $this->getSmarty()->assign('medicos', $medico);
         //llamo al template a mostrar al paciente.
         $this->getSmarty()->display('templates/loginPaciente.tpl');
    }
    
}