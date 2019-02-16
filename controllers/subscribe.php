<?php 
	/**
	 * 
	 */
	class subscribe extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			Session::init();
			$logged = Session::get('loggedIn');
			if($logged == false){
				Session::destroy();
				header('location: '.URL.'login');
				exit;
			}
		}

		public function index($value=false)
		{
			$this->view->render('subscribe/index');
		}

		public function logout()
		{
			Session::destroy();
			header('location: '.URL.'login');
			exit;
		}

	}
?>