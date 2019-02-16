<?php 

	/**
	 * 
	 */
	class login extends Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}
		public function index($value=false)
		{
			# code...
			$this->view->render('login/index');
		}

		public function run($value=false)
		{
			$this->model->run();
		}
	}

 ?>