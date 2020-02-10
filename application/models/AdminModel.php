<?php
	class AdminModel extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getInstansi($limit=0){
			//\\Ditambah pada Routing by RIO//\\
			if ($limit>0) {
				$sql="SELECT * FROM instansi ORDER BY id DESC LIMIT " . $limit;
			}
			else{
				$sql="SELECT * FROM instansi ORDER BY id DESC";
			}
			$query=$this->db->query($sql);
			return $query->result();
		}

		public function getInstansiDetail($id){
			$sql="SELECT * FROM instansi WHERE id=" . $id;			
			$query=$this->db->query($sql);
			return $query->row();
		}
		//\\Ditambah Pada Materi Pagination by RIO//\\
		public function getTotalInstansi(){
			$sql="SELECT * FROM instansi";
			$query=$this->db->query($sql);
			return $query->num_rows();
		}

		//\\Ditambah Pada Materi Pagination by RIO//\\
		public function getInstansiPage($start=0,$limit=0){
			if ($limit>0) {
				$sql="SELECT * FROM instansi ORDER BY id DESC LIMIT " . $start . "," . $limit;
				$query=$this->db->query($sql);
				return $query->result();
			}
			else{
				return NULL;
			}
		}


	}