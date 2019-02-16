<?php 

	/**
	 * 
	 */
	class Errors extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->view->msg = 'This page is no exist';
			$this->view->render('error/index');
		}
	}

 ?>