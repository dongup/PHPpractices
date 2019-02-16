<?php 
	/**
	 * 
	 */
	class Login_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}	

		public function run()
		{

			$sql = 'Select fullname from account where username = :username and passwords = :password;';
			$sth = $this->database->prepare($sql);
			$sth->execute(
				array(':username' => $_POST['Username'],':password' => $_POST['Password'])
			);

			$count = $sth->rowCount();
			if($count>0){
				Session::init();
				Session::set('loggedIn', true);
				header('location: '.URL.'subscribe');
			}else{
				header('location: '.URL.'login');
			}

		}
	}
 ?>