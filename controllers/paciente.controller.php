<?php

require_once('views/paciente.view.php');
require_once('models/turno.model.php');

class PacienteController {

    private $modelturno;
    private $view;

    //En el constructor hago las conecciones a la bases de datos y
    //a la vista para poder usarlas dentro de esta clase.
    public function __construct()
    {    
        $this->view = new PacienteView();
        $this->modelturno = new TurnoModel();
    }

     //funcion para mostrar pagina
     public function mostrarHome()
     {
        $especialidad = $this->modelturno->obtenerEspecialidad();
        $obra = $this->modelturno->obtenerObraSocial();
        $medico = $this->modelturno->obtenerMedicos();

        $this->view->loginPaciente($especialidad, $obra, $medico);

     }

      //funcion para mostrar lxs medicxs segun su especialidad
      public function mostrarMedicosPorEspecialidad()
      {
         $especialidad = $this->modelturno->obtenerEspecialidad();
         $obra = $this->modelturno->obtenerObraSocial();

        $esp = $_POST["especialidad"];
    
        if ($esp == 'todas') {
            $medico = $this->modelturno->obtenerMedicos();
        } else {
            $medico = $this->modelturno->obtenerMedicosPorEspecialidad($esp);
        }
 
         $this->view->loginPaciente($especialidad, $obra, $medico);
 
      }

       //funcion para mostrar lxs medicxs segun su obra social
       public function mostrarMedicosPorObra()
       {
          $especialidad = $this->modelturno->obtenerEspecialidad();
          $obra = $this->modelturno->obtenerObraSocial();
 
         $ob = $_POST["obra"];
     
         if ($ob == 'todas') {
            $medico = $this->modelturno->obtenerMedicos();
        } else {
            $medico = $this->modelturno->obtenerMedicosPorObra($ob);
        }
 
         $this->view->loginPaciente($especialidad, $obra, $medico);
  
  
       }

}