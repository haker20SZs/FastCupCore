<?php

namespace PHPDEV\redstone;

class Repeater extends Activateble{
	
	public $canTranslate = true;
	
	public function onActivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockIdAt($x,$y,$z,94);
		//$this->main->info("Повторитель активирован (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$this->getServer()->getDefaultLevel()->setBlockIdAt($x,$y,$z,93);
		//$this->main->info("Повторитель выключен (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
}