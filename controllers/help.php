<?php 
	/**
	 * 
	 */
	class help extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index($value=false)
		{
			$this->view->render('help/index');
		}

		public function other($value=false)		
		{
			$this->view->render('help/moreHelp');
		}

	}
 ?>