<?php 
/**
 * 
 */
class Database extends CI_Model
{
	
	public function get_data($tabel, $where = false)
	{
		$output = (object)array();
		if($where == false){
			$output->data = $this->db->get($tabel)->result_array();
			$output->err = $this->db->error();
			if($output->err != null){
				$output->status = false;
			} else {
				$output->status = true;
			}
			
			return $output;
		} else {
			$this->db->where($where);
			
			$output->data = $this->db->get($tabel)->result_array();
			$output->err = $this->db->error();
			if($output->err != null){
				$output->status = false;
			} else {
				$output->status = true;
			}
			
			return $output;
		}
	}
	public function insert($tabel, $data)
	{
		$output = (object)array();
		if($this->db->insert($tabel, $data)){
			$output->err = $this->db->error();
			
			if($output->err == null){
				$output->status = true;
			} else {
				$output->status = false;
			}
			return $output;
		} else {
			$output->status = false;
			$output->err = $this->db->error();
			
			return $output;
		}
	}
	public function delete($where, $tabel)
	{
		$output = (object)array();
		if($this->db->delete($tabel, $where)){
			$output->err = $this->db->error();
			
			if($output->err == null){
				$output->status = true;
			} else {
				$output->status = false;
			}
			return $output;
		} else {
			$output->status = false;
			$output->err = $this->db->error();
			
			return $output;
		}
	}

	public function edit($where, $tabel, $data)
	{
		$output = (object)array();
		if($this->db->update($tabel, $data, $where)){
			$output->err = $this->db->error();
			
			if($output->err == null){
				$output->status = true;
			} else {
				$output->status = false;
			}
			return $output;
		} else {
			$output->status = false;
			$output->err = $this->db->error();
			return $output;
		}
	}

	public function like($tabel, $like, $limit=false){
		$output = (object)array();
		$this->db->from($tabel);
		$this->db->like($like);
		if($limit){
			$this->db->limit($limit);
		}
		$output->data = $this->db->get($tabel)->result_array();
		$output->err = $this->db->error();
		return $output;
		//return $this->db->get()->result_array();
	}

	public function order_by_desc($tabel, $order, $where = false, $limit=false)
	{
		$output = (object)array();
		if($where == true){
			$this->db->from($tabel);
			$this->db->where($where);
			$this->db->order_by($order);
			if($limit){
				$this->db->limit($limit);
			}
			$output->data = $this->db->get()->result_array();
			$output->err = $this->db->error();
			
			return $output;
			//return $this->db->get()->result_array();
		} else {
			$this->db->from($tabel);
			$this->db->order_by($order);
			if($limit){
				$this->db->limit($limit);
			}
			$output->data = $this->db->get()->result_array();
			$output->err = $this->db->error();
			return $output;
			//return $this->db->get()->result_array();
		}
	}

	public function limit($tabel, $limit, $where = false)
	{
		$this->db->from($tabel);
		if($where == true){
			$this->db->where($where);
		}
		$this->db->limit($limit);
		$output->data = $this->db->get($tabel)->result_array();
		$output->err = $this->db->error();
		return $output;
		//return $this->db->get()->result_array();
	}

	public function run_query($query){
		$output = array();
		$def = 0;
		if(is_array($query)){
			for ($i=0; $i < count($query); $i++) { 
				$output[] = $this->db->query($query[$i])->result_array();
			}
		} else {
			$output = $this->db->query($query)->result_array();
		}

		return $output;

	}

}

 ?>