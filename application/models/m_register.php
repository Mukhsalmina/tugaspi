<?php 
class m_register extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
		);
		$this->db->insert('user',$data_user);
	}
}
?>