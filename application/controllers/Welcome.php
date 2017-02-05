<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public $conn;
	public function __construct(){
		parent::__construct();//**
		$this->load->helper('url');//**
		$this->load->library('email');
		$this->conn = "Hi";
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('home');
		//echo("arg1");
	}

	public function setting(){
		//$this->load->view('home');
		echo("arg1");
	}

	public function doinsert(){
		echo $_POST['name']." ".$_POST['category']." ".$_POST['subcategory']." ".$_POST['price']." ".$_POST['feature']." ".$_POST['contact']." ".$_POST['email']." "." ";
		
		$this->load->model('Operation');

		$data = array('pname'=>$_POST['name'],'cid'=>$_POST['category'],'sid'=>$_POST['subcategory'],'price'=>$_POST['price'],'feature'=>$_POST['feature'],'image'=>'','email'=>$_POST['email'],'contact'=>$_POST['contact']);

		$data2 = array('pname'=>$_POST['name'],'cid'=>$_POST['category'],'sid'=>$_POST['subcategory'],'price'=>$_POST['price']);

		$select = $this->Operation->insertInProductsFeature($data,$data2);
		if($select == "inserted"){
			//echo($select);
			if(!empty($_FILES['media']['name'])){
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['media']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('media')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
			$this->session->set_flashdata('success_msg', 'Product data have been added successfully.');
			$this->email->from('jitendrapatwa135@gmail.com','JPCI');
			$this->email->to('jitendrapatwa135@gmail.com');
			$this->email->subject('CI Test');
			$this->email->message('Is Am I Done With CI');
			$this->email->send();
		}else{
			//echo($select);
			$this->session->set_flashdata('error_msg', 'Product data not added.');
		}

		$this->load->view('home');
		/*for ($f = 0; $f<count($_FILE['media']['temp_name']); $f++) {
			echo($_FILE['media']['temp_name'][$f]);
		}*/
		/*$this->name = $_POST['name'];
		$this->cid = $_POST['cid'];
		$this->sid = $_POST['sid'];
		$this->price = $_POST['price'];*/
		/*$data = array('pname'=>$_POST['name'],'cid'=>$_POST['cid'],'sid'=>$_POST['sid'],'price'=>$_POST['price']);

		$insert = $this->db->insert('product',$data);

		if($insert){
			$ci = get_instance();
			$ci->load->library('session');
			$ar = array('msg'=>'Data Inserted');
			$ci->session->set_flashdata('para',$ar);
			redirect('./');
		}else{
			$this->load->view('home',array('msg'=>'Data Not Inserted'));
		}*/
	}

	public function getSubCategory(){
		$this->load->model('Operation');
		$cid = $_GET['category'];
		//echo($cid);
		$this->Operation->findsubcat($cid);
	}
}
