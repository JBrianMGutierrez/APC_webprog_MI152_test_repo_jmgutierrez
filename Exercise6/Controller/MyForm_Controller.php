<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
public function __construct()
{
	parent::__construct();
    $this->load->model('MyForm_Model');
}
  function insert()
    {
        $Name = $this->input->post('name');
		$Nickname = $this->input->post('nickname');
		$Email = $this->input->post('email');
		$Homeaddress = $this->input->post('homeaddress');
		$Comment = $this->input->post('comment');
		$Gender = $this->input->post('gender');
		$Cellphone = $this->input->post('cellphone');
		
		$user_data = array(
		'name'        => $Name,
		'nickname'    => $Nickname,
		'email'       => $Email,
		'homeaddress' => $Homeaddress,
		'comment'     => $Comment,
		'gender'      => $Gender,
		'cellphone'   => $Cellphone
		);
		$this->MyForm_Model->add_user($data);
    }
}
?>