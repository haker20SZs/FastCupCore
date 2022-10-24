<?php

namespace PHPDEV\redstone;

class Lamp extends Activateble{
	
	public function onActivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockIdAt($x,$y,$z,124);
		//$this->main->info("Лампа активирована (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockIdAt($x,$y,$z,123);
		//$this->main->info("Лампа выключена (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
}