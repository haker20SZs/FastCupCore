<?php

namespace PHPDEV\redstone;

use pocketmine\math\Vector3;
use pocketmine\block\StickyPiston as StickyPiston2;
use pocketmine\block\PistonArm;
use pocketmine\block\Block;
use pocketmine\tile\Tile;
use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\Random;
use pocketmine\nbt\tag\ByteTag;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\entity\Entity;

class StickyPiston extends Activateble{
	
	public $log = true;
	
	public $notactivated = [];
	
	public $deepCount = [];
	
	public function onActivate($x, $y, $z, &$checked){
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y,$z));
		if($block instanceof StickyPiston2 && $this->canExtend($block, 0)){
			$this->extend($block);
			foreach($block->getLevel()->getPlayers() as $p){
				if(floor($p->x) == $block->x && floor($p->y) == $block->y+1 && floor($p->z) == $block->z){
					$p->setMotion(new Vector3(0,1,0));
				}
			}
		}
		//if($this->log) $this->main->info("Поршень активирован (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y,$z));
		if($block instanceof StickyPiston2 && empty($this->notactivated[$block->asVector3()->__toString()])){
			$this->retract($block);
		}
		//if($this->log) $this->main->info("Поршень выключен (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function extend($block) {
		$tile = $block->getLevel()->getTile($block);
		$tile->namedtag['Progress'] = 1;
		$tile->namedtag['State'] = 2;
		$extendBlock = $block->getSide($block->getExtendSide());
		if ($extendBlock->getId() !== 0) {
		$block->getLevel()->setBlock($extendBlock, Block::get(Block::PISTON_HEAD), true, true);
		$tile->spawnToAll();
		$this->moveNextBlock($block, $extendBlock, 1);
		}else{
				$block->getLevel()->setBlock($extendBlock, Block::get(Block::PISTON_HEAD), true, true);
				$tile->spawnToAll();
		}
	}
	
	public function retract($block) {
		$tile = $block->getLevel()->getTile($block);
		$tile->namedtag['Progress'] = 0;
		$tile->namedtag['State'] = 0;
		$extendBlock = $block->getSide($block->getExtendSide());
		if ($extendBlock->getId() != 34) return true;
		$next = $block->getSide($block->getExtendSide(), 2);
		$block->getLevel()->setBlock($next, Block::get(Block::AIR), true, true);
		$block->getLevel()->setBlock($extendBlock, $next, true, true);
		$tile->spawnToAll();
	}
	
	public function moveNextBlock($block, $prev, $deep){
		$deep++;
		$next = $block->getSide($block->getExtendSide(), $deep);
		$block->getLevel()->setBlock($next, $prev, true, true);
			
		if($next->getId() == 0){
			$this->deepCount[$block->asVector3()->__toString()] = $deep;
			//var_dump("N: ".$deep);
			return true;
		}
		$this->moveNextBlock($block, $next, $deep);
	}
	
	public function movePrevBlock($block, $prev, $deep){
		$deep--;
		$b = $block->getSide($block->getExtendSide(), $deep);
		if($deep <= 1){
			unset($this->deepCount[$block->asVector3()->__toString()]);
			//var_dump("P: ".$deep);
			return true;
		}
		$next = $block->getSide($block->getExtendSide(), $deep);
		$block->getLevel()->setBlock($next, $prev, true, true);
		$this->movePrevBlock($block, $next, $deep);
	}
	
	public function canExtend($block, $deeep){
		for($deep=$deeep;$deep<=4;$deep++){
			$b = $block->getSide($block->getExtendSide(), $deep);
			//var_dump($b->getId());
			if($b->getId() == 0){
				//var_dump($deep);
				return true;
			}
		}
		return false;
	}
	
}