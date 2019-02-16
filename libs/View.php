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
			require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}
	}

 ?>