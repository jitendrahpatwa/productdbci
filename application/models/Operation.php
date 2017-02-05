<?php
class Operation extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function findSubCat($id){
		//echo("found");
		$this->db->select('*')->from('subcategory');
		$this->db->where('cid',$id);
		$select = $this->db->get();
		$json = array();
		if($select->num_rows()>0){
			foreach ($select->result() as $key) {
				$js = array('sname'=>$key->sname,'id'=>$key->id,'cid'=>$key->cid,'grp'=>$key->grp);
				array_push($json, $js);
			}
		}
		echo json_encode($json);
	}

	public function insertInProductsFeature($data,$data2){
		$insert = $this->db->insert('productsfeature',$data);
		if($insert){
			$insert2 = $this->db->insert('product',$data2);
			if($insert2){
				return "inserted";
			}else{
				return "failed in productsfeature";
			}
		}else{
			return "failed";
		}
	}

	public function insertInProduct(){
		
	}
}
?>