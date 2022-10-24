<?php

namespace PHPDEV\redstone;

class Translator{
	
	public $main;
	
	public function canActivate(){
		return false;
	}
	
	public function isTranslator(){
		return true;
	}
	
	public function getServer(){
		return $this->main->getServer();
	}
	
}