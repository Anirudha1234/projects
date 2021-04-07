<?php 
class Stu_insert extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Stu_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('insert');
	
		/*Check submit button */
		if($this->input->post('save'))
			{
		    $data['Rno']=$this->input->post('Rno');
			$data['Name']=$this->input->post('Name');
			$data['Marks']=$this->input->post('Marks');
			$user=$this->Stu_model->saverecords($data);
			if($user>0){
			        echo "error insert";
			}
			else{
					echo "Records Saved Successfully";
			}
		}
	}
	
}
?>