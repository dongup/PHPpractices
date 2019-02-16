<?php 

	/**
	 * 
	 */
	class View
	{
		
		function __construct()
		{
			# code...
		}
		public function render($name)		
		{
			# code...
			require 'views/'.$name.'.php';
		}
	}

 ?>