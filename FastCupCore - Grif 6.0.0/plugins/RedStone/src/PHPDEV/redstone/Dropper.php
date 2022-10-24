<?php

namespace PHPDEV\redstone;

use pocketmine\math\Vector3;
use pocketmine\block\Dropper as Dropper2;
use pocketmine\block\Block;
use pocketmine\entity\Entity;
use pocketmine\tile\Dropper as DropperTile;

use pocketmine\nbt\NBT;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\IntTag;
use pocketmine\nbt\tag\ShortTag;
use pocketmine\nbt\tag\StringTag;

class Dropper extends Activateble{
	
	public $log = true;
	
	public function onActivate($x, $y, $z, &$checked){
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y,$z));
		if($block instanceof Dropper2){
			$this->shoot($block);
		}
		//if($this->log) $this->main->info("Раздатчик активирован (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function onDeactivate($x, $y, $z, &$checked){
		$block = $this->getServer()->getDefaultLevel()->getBlock(new Vector3($x,$y,$z));
		if($block instanceof Dropper2){
			//
		}
		//if($this->log) $this->main->info("Раздатчик выключен (X: ".$x.", Y: ".$y.", Z: ".$z.")");
	}
	
	public function shoot($block){
		$tile = $block->level->getTile($block);
		if ($tile instanceof DropperTile) {
			$dropperInventory = $tile->getInventory();
			$item = $dropperInventory->getFirstItem($index);
			if ($item != null && $item->getId() != 0 && $item->getCount() >= 1) {
				// decreasing item logic
				if ($item->count == 1) { // we shoot last item in slot
					$dropperInventory->clear($index);
				} else {
					$item->count--;
					$dropperInventory->setItem($index, $item);
				}
				// drop item
				/*$params = $this->calculateShootingParams($block);
				$itemEntity = Entity::createEntity("Item", $block->getLevel(), new CompoundTag("", [
								new ListTag("Pos", [
									new DoubleTag("", $params['x']), 
									new DoubleTag("", $params['y']),
									new DoubleTag("", $params['z'])
								]),
								new ListTag("Motion", [
									new DoubleTag("", -sin($params['yawRad']) * cos($params['pitchRad']) / 10),
									new DoubleTag("", 0),
									new DoubleTag("", cos($params['yawRad']) * cos($params['pitchRad']) / 10)
								]),
								new ListTag("Rotation", [
									new FloatTag("", $params['yawRad'] * 180 / M_PI),
									new FloatTag("", $params['pitchRad'] * 180 / M_PI)
								]),
								new ShortTag("Health", 5),
								$item->nbtSerialize(),
								new ShortTag("PickupDelay", 10)
							]));
				$itemEntity->spawnToAll();*/
				$item2 = clone $item;
				$item2->setCount(1);
				$pos = $block->getSide($block->getDropSide());
				$block->getLevel()->dropItem($pos, $item2);
			}
		}
	}
	
	public function calculateShootingParams($block) {
		$data = [
			'x' => $block->x,
			'y' => $block->y,
			'z' => $block->z,
			'yawRad' => 0,
			'pitchRad' => 0,
		];
		$face = $block->getFace();
		if ($face == Block::SIDE_DOWN) {
			$data['pitchRad'] = 0.5 * M_PI;
		} else if ($face == Block::SIDE_UP) {
			$data['pitchRad'] = -0.5 * M_PI;
		} else {
			$data['y'] += 0.5;
			if ($face == Block::SIDE_SOUTH) {
				$data['x'] += 0.5;
				$data['z'] += 2;
			} else if ($face == Block::SIDE_NORTH) {
				$data['yawRad'] = M_PI;
				$data['x'] += 0.5;
				$data['z'] -= 1;
			} else if ($face == Block::SIDE_WEST) {
				$data['yawRad'] = 0.5 * M_PI;
				$data['x'] -= 1;
				$data['z'] += 0.5;
			} else if ($face == Block::SIDE_EAST) {
				$data['yawRad'] = 1.5 * M_PI;
				$data['x'] += 2;
				$data['z'] += 0.5;
			}
		}
		return $data;
	}
	
}