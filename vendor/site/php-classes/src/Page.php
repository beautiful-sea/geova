<?php

namespace Geova;

use Rain\Tpl;


class Page{

	private $tpl;
	private $defaults = array(//Configurações padrões da página
		"header"	=> false,
		"footer"	=> false,
		"data"		=> []
	);
	private $options = [];

	public function __construct($opts = array(), $tpl_dir = "/views/site/"){

		$this->options = array_merge($this->defaults, $opts);//Mesclando as conf. padrões com as do construct

		$config = array(//Configurações do template
			"tpl_dir"	=> $_SERVER['DOCUMENT_ROOT'].$tpl_dir,
			"cache_dir"	=> $_SERVER['DOCUMENT_ROOT']."/views-cache/",
			"debug"		=> false//Definir como falso melhora a velocidade
		);

		Tpl::configure($config);

		// Criando objeto Tpl
		$this->tpl = new Tpl;

		if($this->options["header"] === true){
			$this->tpl->draw("header");
		}
		
	}

	public function setData($data = array()){
		foreach ($data as $key => $value) {
			$this->tpl->assign($key,$value);
		}
	}

	public function setTpl($name, $data = array(), $returnHTML = false){
		$this->setData($data);
		return $this->tpl->draw($name, $returnHTML);
	}

	public function __destruct(){
		if($this->options["footer"] == true){
			$this->tpl->draw("footer");
		}
	}
}