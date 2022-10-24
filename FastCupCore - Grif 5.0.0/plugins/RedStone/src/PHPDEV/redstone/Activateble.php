<?php

namespace PHPDEV\redstone;

class Activateble{
	
	public $canTranslate = false;
	
	public $main;
	
	public function canActivate(){
		return true;
	}
	
	public function isTranslator(){
		return $this->canTranslate;
	}
	
	public function getServer(){
		return $this->main->getServer();
	}
	
}