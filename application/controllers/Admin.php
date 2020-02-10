<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("AdminModel");
		$this->cek_user_login();
	}

	public function index()
	{
		$data["content_page"]="instansi";
		$data["instansi"]=$this->AdminModel->getInstansi(0);
		// print_r($data);die;
		$this->load->view("admin/admin_index",$data); 
	 }
	 
	 public function addInstansi() {
		$data["content_page"]="add_form";
		$this->load->view("admin/admin_index",$data); 
	 }

	 //\\Ditambah pada ADD by Rio//\\
	 public function addInstansiSubmit(){
	 	$Instansi_name=$_POST["Instansi_name"];
	 	$desc=$_POST["Instansi_description"];
	 	$sql="INSERT INTO instansi (instansi,deskripsi) VALUES('" . $Instansi_name . "','" . $desc . "')";
	 	$query=$this->db->query($sql);
	 	redirect(base_url() . "Admin");

	 }
	 //\\END pada ADD by Rio//\\
	 
	 public function editInstansi($id) {
	 	if ($id>0) {
			$data["content_page"]="edit_form";
			//\\Ditambah pada EDIT by Rio//\\
			$data["data_Instansi"]=$this->AdminModel->getInstansiDetail($id);
			$this->load->view("admin/admin_index",$data);
		} 
	 }

	 //\\Ditambah pada EDIT by Rio//\\
	 public function editInstansiSubmit(){
	 	$Instansi_id=$_POST["Instansi_id"];
	 	$Instansi_name=$_POST["Instansi_name"];
	 	$desc=$_POST["Instansi_description"];
	 	$sql="UPDATE instansi SET instansi='" . $Instansi_name . "',deskripsi='" . $desc . "' WHERE id=" . $Instansi_id;
	 	$query=$this->db->query($sql);
	 	redirect(base_url() . "Admin");

	 }
	 //\\END pada EDIT by Rio//\\

	 //\\Ditambah pada DELETE by Rio//\\
	 public function deleteInstansi($id){
	 	$sql="DELETE FROM instansi WHERE id=" . $id;
	 	$query=$this->db->query($sql);
	 	redirect(base_url() . "Admin");

	 }
	 //\\END pada DELETE by Rio//\\	

	public function cek_user_login()
    {
        if ($this->session->userdata('username')==NULL ) {
            echo '
            <script>
            alert("Silahkan login terlebih dahulu");
            window.location = "'.base_url().'";
            </script>
            ';
            die();
        }
    }
}
