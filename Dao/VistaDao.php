<?php

class VistaDao {

	private $inicio = false;
	private $new_encuesta = false;
	private $cont_encuesta = false;
	private $gest_curso = false;

	public function __construct() {

	}

	private function set_all_false(){
		$this->inicio = false;
		$this->new_encuesta = false;
		$this->cont_encuesta = false;
		$this->gest_curso = false;
	}

	public function set_vista($name_vista){
		$this->set_all_false();
		switch ( $name_vista ) {
			case 'inicio':
				$this->inicio = true;
				break;
			
			case 'new_encuesta':
				$this->new_encuesta = true;
				break;
			
			case 'cont_encuesta':
				$this->cont_encuesta = true;
				break;
			
			case 'gest_curso':
				$this->gest_curso = true;
				break;
			
			default:
				break;
		}
	}

	public function get_vista($name_vista){
		switch ( $name_vista ) {
			case 'inicio':
				return $this->inicio;
			
			case 'new_encuesta':
				return $this->new_encuesta;
			
			case 'cont_encuesta':
				return $this->cont_encuesta;
			
			case 'gest_curso':
				return $this->gest_curso;
			
			default:
				return false;
		}
	}
}

?>