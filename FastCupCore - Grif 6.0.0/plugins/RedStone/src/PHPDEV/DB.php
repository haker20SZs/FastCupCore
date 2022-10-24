<?php

namespace PHPDEV;

use pocketmine\utils\Config;

class DB{
	
	public $arm = array();
	
	public $activ = array();
	
	public $deactiv = array();
	
	public function __construct($main){
		$this->main = $main;
		$this->c = new Config($this->getMain()->getDataFolder()."data.json", Config::JSON);
	}
	
	public function isActivated($xyz){
		return $this->c->exists($xyz);
	}
	
	public function activate($xyz){
		$this->c->set($xyz, true);
		$this->c->save();
	}
	
	public function deactivate($xyz){
		$this->c->remove($xyz);
		$this->c->save();
	}
	
	public function getMain(){
		return $this->main;
	}
	
	public function getServer(){
		return $this->getMain()->getServer();
	}
	
}