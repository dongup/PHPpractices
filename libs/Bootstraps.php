<?php 
	class Bootstrap{
		
		function __construct(){ 
			# code...
			$url = isset($_GET['url']) ? $_GET['url'] : null;
			$url = rtrim($url,'/');
			$url = explode('/', $url);

			if(empty($url[0])){
				require 'controllers/index.php';
				$controllers = new index();
				$controllers->index();
				return false;
			}

			$file = 'controllers/' . $url[0] . ".php";			

			if(file_exists($file)){
				require $file;
			}else{
				$this->error();
			}

			$controllers = new $url[0];
			$controllers->loadModels($url[0]);

			if(isset($url[2])){
				if(method_exists($controllers, $url[1]))
					$controllers->{$url[1]}($url[2]);
				else
					$this->error();
			}
			elseif (isset($url[1])) {
				if (method_exists($controllers, $url[1])) {
					$controllers->{$url[1]}();
				}
				else 
					$this->error();
			}
			else{
				$controllers->index();
			}

		}

		public function error()
		{
			require "controllers/error.php";
			$controllers = new Errors();
			return false;
		}

	}
?>