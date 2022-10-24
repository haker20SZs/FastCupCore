<?php

namespace PHPDEV;

use pocketmine\plugin\PluginBase;
use PHPDEV\DB;
use pocketmine\math\Vector3;
use pocketmine\block\Door;
use pocketmine\scheduler\CallbackTask;
use pocketmine\block\Piston; 
use pocketmine\block\StickyPiston; 
use pocketmine\block\Block;
use pocketmine\block\Trapdoor;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
//use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\level\Level;


use PHPDEV\redstone\{
	Lamp,
	RedStoneWire,
	Repeater,
	Doorable,
	Piston as Piston2,
	StickyPiston as StickyPiston2
};

class RedStone extends PluginBase implements Listener{
	
	public $buttonTime = 2;
	
	public $radius = 16;
	
	public $bids = array();
	
	public function onEnable(){
		
		$this->c = new Config($this->getDataFolder()."config.yml", Config::YAML);
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->db = new DB($this);
		$this->bids[123] = new Lamp(); // Выкл. лампа
		$this->bids[124] = $this->bids[123]; // Вкл. лампа
		$this->bids[55] = new RedStoneWire(); // Редтоун пыль
		$this->bids[93] = new Repeater(); // Выкл. повторитель
		$this->bids[94] = $this->bids[93]; // Вкл. повторитель
		$this->bids[64] = new Doorable(); // Двери и люки \/
		$this->bids[71] = $this->bids[64];
		$this->bids[96] = $this->bids[64];
		$this->bids[167] = $this->bids[64];
		$this->bids[193] = $this->bids[64];
		$this->bids[194] = $this->bids[64];
		$this->bids[195] = $this->bids[64];
		$this->bids[196] = $this->bids[64];
		$this->bids[197] = $this->bids[64]; // Двери и люки /\
		$this->bids[33] = new Piston2();
		$this->bids[29] = new StickyPiston2();
		foreach($this->bids as $mec){
			$mec->main = $this;
		}
		//$this->getServer()->getScheduler()->scheduleDelayedTask(new CallbackTask(array($this, "checkPlates"), array()), 10);
	}
	
	/*public function onMove(PlayerMoveEvent $e){
		$p = $e->getPlayer();
		$x = $p->getFloorX();
		$y = $p->getFloorY();
		$z = $p->getFloorZ();
		if(empty($p->prevPos)){
			$p->prevPos = $x." ".$y." ".$z;
			return;
		}
		if($p->prevPos != $x." ".$y." ".$z){
			$id = $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z);
			if($id == 70 || $id == 72){
				if(!$this->db->isActivated($x." ".$y." ".$z)){
					$this->db->activate($x." ".$y." ".$z);
					$checked = array();
					$checked['radius'] = $this->radius;
					$this->checkBlocks($x, $y, $z, $checked, true);
					$this->checkBlocks($x, $y - 1, $z, $checked, true);
				}
			}else{
				$ex = explode(" ", $p->prevPos);
				$previd = $this->getServer()->getDefaultLevel()->getBlockIdAt($ex[0], $ex[1], $ex[2]);
				if($previd == 70 || $previd == 72){
					$this->db->deactivate($ex[0]." ".$ex[1]." ".$ex[2]);
					$checked = array();
					$checked['radius'] = $this->radius;
					$this->checkBlocks($ex[0], $ex[1], $ex[2], $checked, false);
					$this->checkBlocks($ex[0], $ex[1] - 1, $ex[2], $checked, false);
				}
			}
		}
		$p->prevPos = $x." ".$y." ".$z;
	}*/
	
	public function onPlace(BlockPlaceEvent $e){
		$b = $e->getBlock();
		$x = $b->x;
		$y = $b->y;
		$z = $b->z;
		if($b->getId() == 152){
			$this->db->activate($x.$y.$z);
			$checked = array();
			$checked['radius'] = $this->radius;
			$this->checkBlocks($x, $y, $z, $checked, true);
		}
		if($b->getId() == 75){
			$this->db->activate($x.$y.$z);
			$checked = array();
			$checked['radius'] = $this->radius;
			$this->checkBlocks($x, $y, $z, $checked, true);
		}
		if(isset($this->bids[$b->getId()])){
			for($xx=($x-1);$xx<=($x+1);$xx++){
				for($zz=($z-1);$zz<=($z+1);$zz++){
					if($xx == ($x-1) && $zz == ($z-1) ||
					   $xx == ($x-1) && $zz == ($z+1) ||
					   $xx == ($x+1) && $zz == ($z-1) ||
					   $xx == ($x+1) && $zz == ($z+1)
					){
						continue;
					}
					$id = $this->getServer()->getDefaultLevel()->getBlockIdAt($xx, $y, $zz);
					$data = $this->getServer()->getDefaultLevel()->getBlockDataAt($xx, $y, $zz);
					if($id == 55 && $data > 0){
						$ar = array();
						$this->bids[$b->getId()]->onActivate($x,$y,$z, $ar);
						return;
					}
					if($this->db->isActivated($x.$y.$z)){
						$checked = array();
						$checked['radius'] = $this->radius;
						$this->checkBlocks($x, $y, $z, $checked, true);
						$e->setCancelled();
						return;
					}
				}
			}
		}
		if($b->getId() == 55){
			for($xx=($x-1);$xx<=($x+1);$xx++){
				for($yy=($y-1);$yy<=($y+1);$yy++){
					for($zz=($z-1);$zz<=($z+1);$zz++){
						if($xx == ($x-1) && $zz == ($z-1) ||
						   $xx == ($x-1) && $zz == ($z+1) ||
						   $xx == ($x+1) && $zz == ($z-1) ||
						   $xx == ($x+1) && $zz == ($z+1)
						){
							continue;
						}
						$id = $this->getServer()->getDefaultLevel()->getBlockIdAt($xx, $yy, $zz);
						$data = $this->getServer()->getDefaultLevel()->getBlockDataAt($xx, $yy, $zz);
						if($id == 55 && $data > 0){
							$ar = array();
							$this->bids[$b->getId()]->onActivate($x,$y,$z, $ar);
							return;
						}
					}
				}
			}
		}
	}
	
	
	public function onBreak(BlockBreakEvent $e){
		$b = $e->getBlock();
		$x = $b->x;
		$y = $b->y;
		$z = $b->z;
		if($b->getId() == 152){
			$this->db->deactivate($x.$y.$z);
			$checked = array();
			$checked['radius'] = $this->radius;
			$this->checkBlocks($x, $y, $z, $checked, false);
		}
		if($b->getId() == 75){
			$this->db->deactivate($x.$y.$z);
			$checked = array();
			$checked['radius'] = $this->radius;
			$this->checkBlocks($x, $y, $z, $checked, false);
		}
	}
	
	public function onInteract(PlayerInteractEvent $e){
		$p = $e->getPlayer();
		$b = $e->getBlock();
		$x = $b->x;
		$y = $b->y;
		$z = $b->z;
		if($b->getId() == 69){
			if(!$this->db->isActivated($x.$y.$z)){
				$this->db->activate($x.$y.$z);
				$checked = array();
				$checked['radius'] = $this->radius;
				$this->checkBlocks($x, $y, $z, $checked, true);
			}else{
				$this->db->deactivate($x.$y.$z);
				$checked = array();
				$checked['radius'] = $this->radius;
				$this->checkBlocks($x, $y, $z, $checked, false);
			}
		}
		if($b->getId() == 77 || $b->getId() == 143){
			if(!$this->db->isActivated($x.$y.$z)){
				$this->db->activate($x.$y.$z);
				$checked = array();
				$checked['radius'] = $this->radius;
				$this->checkBlocks($x, $y, $z, $checked, true);
				$this->getServer()->getScheduler()->scheduleDelayedTask(new CallbackTask(array($this, "offButton"), array($x,$y,$z)), ($this->buttonTime * 20));
			}else{
				$this->db->deactivate($x.$y.$z);
				$checked = array();
				$checked['radius'] = $this->radius;
				$this->checkBlocks($x, $y, $z, $checked, false);
			}
		}
	}
	
	public function offButton($x,$y,$z){
		$this->db->deactivate($x.$y.$z);
		$checked = array();
		$checked['radius'] = $this->radius;
		$this->checkBlocks($x, $y, $z, $checked, false);
	}
	
	public function checkBlock($x,$y,$z, &$checked, $type){
		$this->checkBlocks($x, $y, $z, $checked, $type);
	}
	
	public function checkBlocks($x,$y,$z, &$checked, $type){
		if(isset($checked[$x.$y.$z])) return;
		if($checked['radius'] <= 0) return;
		$checked[$x.$y.$z] = true;
		$bid = $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z);
		if(isset($this->bids[$bid])){
			if($type){
				$this->bids[$bid]->onActivate($x,$y,$z,$checked);
				$checked['radius']--;
				if(!$this->bids[$bid]->isTranslator()){
					return;
				}
			}else{
				$this->bids[$bid]->onDeactivate($x,$y,$z,$checked);
				$checked['radius']--;
			}
		}
		if($bid == 55){
			for($xx=($x-1);$xx<=($x+1);$xx++){
				for($yy=($y-1);$yy<=($y+1);$yy++){
					for($zz=($z-1);$zz<=($z+1);$zz++){
						if($xx == ($x-1) && $zz == ($z-1) ||
						   $xx == ($x-1) && $zz == ($z+1) ||
						   $xx == ($x+1) && $zz == ($z-1) ||
						   $xx == ($x+1) && $zz == ($z+1)
						){
							continue;
						}
						$id = $this->getServer()->getDefaultLevel()->getBlockIdAt($xx, $yy, $zz);
						if(isset($this->bids[$id])) $this->checkBlock($xx, $yy, $zz, $checked, $type);
					}
				}
			}
		}else{
			for($xx=($x-1);$xx<=($x+1);$xx++){
					for($zz=($z-1);$zz<=($z+1);$zz++){
						if($xx == ($x-1) && $zz == ($z-1) ||
						   $xx == ($x-1) && $zz == ($z+1) ||
						   $xx == ($x+1) && $zz == ($z-1) ||
						   $xx == ($x+1) && $zz == ($z+1)
						){
							continue;
						}
						$id = $this->getServer()->getDefaultLevel()->getBlockIdAt($xx, $y, $zz);
						if(isset($this->bids[$id])) $this->checkBlock($xx, $y, $zz, $checked, $type);
					}
			}
		//if($this->getServer()->getDefaultLevel()->getBlockIdAt($x + 1, $y, $z) == 55 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x + 1, $y, $z) == 124 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x + 1, $y, $z) == 123) $this->checkBlock($x + 1, $y, $z, $checked, $type);
		//if($this->getServer()->getDefaultLevel()->getBlockIdAt($x - 1, $y, $z) == 55 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x - 1, $y, $z) == 124 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x - 1, $y, $z) == 123) $this->checkBlock($x - 1, $y, $z, $checked, $type);
		//if($this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z + 1) == 55 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z + 1) == 124 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z + 1) == 123) $this->checkBlock($x, $y, $z + 1, $checked, $type);
		//if($this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z - 1) == 55 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z - 1) == 124 || $this->getServer()->getDefaultLevel()->getBlockIdAt($x, $y, $z - 1) == 123) $this->checkBlock($x, $y, $z - 1, $checked, $type);
		}
	}
	
	public function info($m){
		//$this->getServer()->getLogger()->info("RedStone Logger: ".$m);
	}
	
}