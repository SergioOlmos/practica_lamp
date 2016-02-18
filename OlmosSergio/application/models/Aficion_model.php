<?php
class Aficion_model extends CI_Model {
	public $idaf;
	public $nombreaficion;
	
	function crear($nombre) {
		$this->nombreaficion=$nombre;
		$this->db->insert('aficiones',$this);
		return true;
	}
	
	function leerTodos() {
		return $this->db->get('aficiones')->result();
	}
	
}


