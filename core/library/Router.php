<?php
class Router{

	public $routes;
	public $path = '';
	public $query ='';
	public $matcher;

	function __construct(){
		$this->set_routing();

	}

	function set_routing(){
		require_once(DIR.'/config/routes.php');
		$this->routes = $route;
		$this->parse_route();
	}

	function parse_route(){
		$a = parse_url('http://dummy'.$_SERVER['REQUEST_URI']);
		$this->path = (isset($a['path'])) ? $a['path'] : '';
		$this->query = (isset($a['query'])) ? $a['query'] : '';

		$this->build();
	}

	function build(){
		$this->path = trim($this->path,'/');
		$tmp = explode('/',$this->path);
		if(is_dir(BASEPATH.$tmp[0])){
			array_shift($tmp);
		}
		
		$this->match($tmp);
	}

	function match($uri){
		$myUri = implode("/",$uri);
		echo $this->routes[$myUri];
	}

}

?>