<?php 

class delete extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	
	public function delete_model($news_id){

		$this ->db-> where('news_id', $news_id);
  		$this ->db-> delete('news_info');

	}


	
}

?>