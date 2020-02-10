<?php 
	class LoginModel extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function checkAdmin($username,$password){
			$this->db->select("*");
			$this->db->from("users");
			$this->db->where("username",$username);
			$this->db->where("password",md5($password));
			$result = $this->db->get();
			// print_r($this->db->last_query());die;
			return $result->num_rows();
		}
	}