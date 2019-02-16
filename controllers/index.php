<?php 

	/**
	 * 
	 */
	class index extends Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}

		public function index($value=false)
		{
			$this->view->render('index/index');
		}
	}

 ?>