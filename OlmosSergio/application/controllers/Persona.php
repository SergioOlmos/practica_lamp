<?php
class Persona extends CI_Controller {

	function crear() {
		enmarcar ( $this, 'persona/crear' );
	}
	function crearPost() {
		$this->load->model ( 'persona_model', '', true );
		$this->load->model ( 'aficion_model', '', true );
		$datos ['status'] = $this->persona_model->crear ( $_POST ['nombrePersona'] );
		$this->load->view ( 'persona/crearPost', $datos );
	}
	function listar() {
		$this->load->model ( 'Persona_model', 'persona', true );
		$datos ['personas'] = $this-> persona ->leerTodos ();
		enmarcar($this, 'persona/listar',$datos);
	}
}
?>