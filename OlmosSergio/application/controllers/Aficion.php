<?php
class Aficion extends CI_Controller {
	function crear() {
		enmarcar ( $this, 'aficion/crear' );
	}
	function crearPost() {
		$this->load->model ( 'aficion_model', '', true );
		$datos ['status'] = $this->aficion_model->crear ( $_POST ['nombreAficion'] );
		$this->load->view ( 'aficion/crearPost', $datos );
	}
	
	function listar() {
		$this->load->model ( 'Aficion_model', 'aficion', true );
		$datos ['aficiones'] = $this-> aficion ->leerTodos ();
		enmarcar($this, 'aficion/listar',$datos);
	}
	

	
	
	
}	
?>

