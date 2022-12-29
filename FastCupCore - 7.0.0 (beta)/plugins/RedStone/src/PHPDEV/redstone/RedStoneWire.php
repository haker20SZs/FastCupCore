<?php

namespace PHPDEV\redstone;

class RedStoneWire extends Activateble{
	
	public $canTranslate = true;
	
	public function onActivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockDataAt($x,$y,$z,3);
		//$this->main->info("Редстоун активирован (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockDataAt($x,$y,$z,0);
		//$this->main->info("Редстоун выключен (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
}