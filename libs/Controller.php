<?php 
	/**
	 * 
	 */
	class Controller
	{
		
		function __construct()
		{
			# code...
			$this->view = new View();
		}

		public function loadModels($name)		
		{
			$file = 'models/' . $name .'_model.php';
			if(file_exists($file)){
				require $file;
				$modelName = $name . '_model';
				$this->model = new $modelName();

			}
		}

	}
 ?>