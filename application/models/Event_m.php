<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_m extends CI_Model{
	public function showAllEevent(){
		$this->db->order_by('ev_id', 'desc');
		$query = $this->db->get('tbl_event');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addEvent(){
		$field = array(
			'ev_title'=>$this->input->post('ev_title'),
			'ev_start_dt'=>$this->input->post('ev_start_dt'),
			'ev_end_dt'=>$this->input->post('ev_end_dt'),
			'ev_recurr'=>$this->input->post('ev_recurr'),
			'ev_re_a'=>$this->input->post('ev_re_a'),
			'ev_re_b'=>$this->input->post('ev_re_b'),
			'ev_re_c'=>$this->input->post('ev_re_c'),
			'ev_re_d'=>$this->input->post('ev_re_d'),
			'ev_re_e'=>$this->input->post('ev_re_e'),
			);
		$this->db->insert('tbl_event', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editEvent(){
		$id = $this->input->get('id');
		$this->db->where('ev_id', $id);
		$query = $this->db->get('tbl_event');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function viewEvent(){
		$id = $this->input->get('id');
		$this->db->where('ev_id', $id);
		$query = $this->db->get('tbl_event');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateEvent(){
		$id = $this->input->post('ev_id');
		$field = array(
			'ev_title'=>$this->input->post('ev_title'),
			'ev_start_dt'=>$this->input->post('ev_start_dt'),
			'ev_end_dt'=>$this->input->post('ev_end_dt'),
			'ev_recurr'=>$this->input->post('ev_recurr'),
			'ev_re_a'=>$this->input->post('ev_re_a'),
			'ev_re_b'=>$this->input->post('ev_re_b'),
			'ev_re_c'=>$this->input->post('ev_re_c'),
			'ev_re_d'=>$this->input->post('ev_re_d'),
			'ev_re_e'=>$this->input->post('ev_re_e'),
		);
		$this->db->where('ev_id', $id);
		$this->db->update('tbl_event', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleteEvent(){
		$id = $this->input->get('id');
		$this->db->where('ev_id', $id);
		$this->db->delete('tbl_event');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}