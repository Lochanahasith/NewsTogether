<?php 

class update extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	
	public function accept_model($news_id,$data_array){

		$this->db->set('status','accepted');
		$this->db->where('news_id',$news_id);
		$this->db->update('news_status');




		$this->db->insert('news_telecasted', $data_array);

	}
	


	public function reject_model($news_id,$data_array){

		$this->db->set('status','rejected');
		$this->db->where('news_id',$news_id);
		$this->db->update('news_status');

		$this->db->insert('news_rejected', $data_array);

	}

	public function update_model($news_id,$title,$venue,$description,$date,$time,$district,$due_date,$due_time){
				 

		$this->db->set('title',$title);
		$this->db->set('venue',$venue);
		$this->db->set('description',$description);
		$this->db->set('date',$date);
		$this->db->set('time',$time);
		$this->db->set('district',$district);
		$this->db->set('due_date',$due_date);
		$this->db->set('due_time',$due_time);
		$this->db->where('news_id',$news_id);
		$this->db->update('news_info');

	}
}

?>
