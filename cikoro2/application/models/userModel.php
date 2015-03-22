<?php
class UserModel extends CI_Model
{
	function UserModel()
	{
		parent::__construct();
	
	}
	
	function check($username,$password)
	{
		try{
			$sql = "select * from user where username='".$username."' and password='".$password."'";
			$query = $this->db->query($sql);
			if($query->result()){
				return 1;
			}
			else{
				return false;
			}
		}
		catch(Exception $e){
			return false;
		}
	}
	function changepassword($password,$password2)
	{
		try {
			$sql="select * from user where password='$password'";
			$query=$this->db->query($sql);
			if($query->result()){
				
				$sql="update user set password='$password2'";
				$query=$this->db->query($sql);
				return true;
			}
			else{
				return false;
			}
		} 

		catch (Exception $e) {
			return false;
		}
	}
}