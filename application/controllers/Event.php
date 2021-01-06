<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Event extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('event_m', 'm');
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('event/index');
		$this->load->view('layout/footer');
	}

	public function showAllEevent(){
		$result = $this->m->showAllEevent();
		echo json_encode($result);
	}

	public function addEvent(){
		$result = $this->m->addEvent();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEvent(){
		$result = $this->m->editEvent();
		echo json_encode($result);
	}

	public function viewEvent(){
		$result = $this->m->viewEvent();

		$data = array(
			'tot_days' => array(),
			'tot_Rec' =>0,
		);
		if(!empty($result)){

			$date1=date_create($result->ev_start_dt);
			$date2=date_create($result->ev_end_dt);
			$diff =date_diff($date1,$date2);
			$days =intval($diff->format("%R%a"));

			$tot_Rec = [];
			$new_date = $result->ev_start_dt;
			for($i=0; $i<=$days; $i++){
				$new_date = date('Y-m-d', strtotime('+'.$i.' day', strtotime($result->ev_start_dt)));
				$tot_Rec[] = array(
					'date'=> $new_date,
					'day' => date('l', strtotime($new_date)),
				);
			}

			$data['tot_Rec'] = $days+1;
			$data['tot_days'] = $tot_Rec;
		}
		echo json_encode($data);
	}

	public function updateEvent(){
		$result = $this->m->updateEvent();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEvent(){
		$result = $this->m->deleteEvent();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}