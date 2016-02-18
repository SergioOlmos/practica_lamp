<?php
class Persona_model extends CI_Model {
	public $idper;
	public $nombrepersona;

	function crear($nombre) {
		$this->nombrepersona=$nombre;
		$this->db->insert('personas',$this);
		return true;
	}

	function leerTodos() {
		return $this->db->get('personas')->result();
	}
}