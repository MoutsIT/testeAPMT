<?php
class mouts_model extends CI_Model{

	function listar(){

		$hasil=$this->db->get('mouts');

	return $hasil->result();
	}


	function salvar(){

		$data = array(
				'campo_um' 		=> $this->input->post('campo_um'), 
				'campo_dois' 	=> $this->input->post('campo_dois'), 
				'campo_tres' 	=> $this->input->post('campo_tres'), 
				'campo_quatro'	=> $this->input->post('campo_quatro'), 
			);

		$result=$this->db->insert('mouts',$data);

	return $result;
	}


	function atualizar(){

		$id				= $this->input->post('id');
		$campo_um		= $this->input->post('campo_um');
		$campo_dois		= $this->input->post('campo_dois');
		$campo_tres		= $this->input->post('campo_tres');
		$campo_quatro	= $this->input->post('campo_quatro');

			$this->db->set('campo_um', $campo_um);
			$this->db->set('campo_dois', $campo_dois);
			$this->db->set('campo_tres', $campo_tres);
			$this->db->set('campo_quatro', $campo_quatro);

				$this->db->where('id', $id);

		$result = $this->db->update('mouts');

	return $result;
	}


	function excluir(){

		$id = $this->input->post('id');

			$this->db->where('id', $id);

		$result=$this->db->delete('mouts');

	return $result;
	}
	
}