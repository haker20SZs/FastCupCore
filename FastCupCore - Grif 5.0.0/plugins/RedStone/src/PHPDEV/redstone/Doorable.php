<?php

namespace PHPDEV\redstone;

use pocketmine\block\Trapdoor;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\block\Door;

class Doorable extends Activateble{
	
	public function onActivate($x, $y, $z, &$checked){
		$this->activate($x, $y, $z, $checked);
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$this->activate($x, $y, $z, $checked);
	}
	
	public function activate($x, $y, $z, &$checked){
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y,$z));
		if($block instanceof Door || $block instanceof Trapdoor){
			$block->onActivate(Item::get(0));
		}
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y-1,$z));
		if($block instanceof Door){
			$checked[$x.($y-1).$z] = true;
		}
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y+1,$z));
		if($block instanceof Door){
			$checked[$x.($y+1).$z] = true;
		}
		//$this->main->info("Дверь/люк был активирован (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
}