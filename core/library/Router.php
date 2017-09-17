<?php

class Router{

	public $path = '';
	public $query ='';
	public $matcher;

	function __construct(){
		$this->set_routing();

	}

	function set_routing(){
		require_once(__DIR__.'/../config/routes.php');
		$this->parse_route();
	}

	function parse_route(){
		$a = parse_url('http://dummy'.$_SERVER['REQUEST_URI']);
		$this->path = ($a['path']) ? $a['path'] : '';
		$this->query = ($a['query']) ? $a['query'] : '';

		$this->build();
	}

	function build(){
		$this->path = trim($this->path,'/');
		$tmp = explode('/',$this->path);
		print_r($tmp);
	}

}

?>