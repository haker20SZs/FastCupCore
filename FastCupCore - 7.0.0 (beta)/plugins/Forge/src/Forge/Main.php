<?php

namespace Forge;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\math\Vector3;
use pocketmine\tile\Tile;
use pocketmine\item\Item;
use pocketmine\event\level\ChunkPopulateEvent;
use pocketmine\nbt\tag\{CompoundTag, IntTag, StringTag};
use pocketmine\block\Block;

class Main extends PluginBase implements Listener{

public function onEnable(){

    $this->getServer()->getPluginManager()->registerEvents($this, $this);

}
    
public function onChunk(ChunkPopulateEvent $event){

$level = $event->getLevel();
$chance = mt_rand(1, 200);

if($chance == 5){
if($level->getName() == "world" or $level->getName() == "world"){

$xx = ($event->getChunk()->getX() << 4) + mt_rand(-5, 5);
$zz = ($event->getChunk()->getZ() << 4) + mt_rand(-5, 5);
$yy = $level->getHighestBlockAt($xx, $zz) + 1;

$level->loadChunk($xx, $yy, $zz);
$level->setBlock(new Vector3($xx, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy, $zz - 6), Block::get(4, 0));
//2
$level->setBlock(new Vector3($xx, $yy + 1, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz), Block::get(17, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz), Block::get(17, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 1), Block::get(43, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 1), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 2), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 2), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 3), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 4), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 4), Block::get(53, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 4), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 5), Block::get(10, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 5), Block::get(10, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 5), Block::get(4, 0));
//сс
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 5), Block::get(53, 3));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 5), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 5), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 1, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 1, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 1, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 1, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 1, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 1, $zz - 6), Block::get(17, 0));
//3
$level->setBlock(new Vector3($xx, $yy + 2, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz), Block::get(17, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz), Block::get(17, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 1), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 2), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 2), Block::get(102, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 3), Block::get(58, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 3), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 4), Block::get(101, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 4), Block::get(171, 12));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 4), Block::get(102, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 5), Block::get(101, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 5), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 2, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 2, $zz - 6), Block::get(102, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 2, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 2, $zz - 6), Block::get(102, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 2, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 2, $zz - 6), Block::get(17, 0));
//4
$level->setBlock(new Vector3($xx, $yy + 3, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz), Block::get(85, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz), Block::get(17, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz), Block::get(17, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 1), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 1), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 2), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 2), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 3), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 3), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 3), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 4), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 5), Block::get(5, 0));

$level->setBlock(new Vector3($xx, $yy + 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 3, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 3, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 3, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 3, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 3, $zz - 6), Block::get(5, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 3, $zz - 6), Block::get(17, 0));
//5
$level->setBlock(new Vector3($xx, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz), Block::get(17, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz), Block::get(17, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 4, $zz - 6), Block::get(17, 0));
//6
$level->setBlock(new Vector3($xx, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 1), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 1), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 1), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 2), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 2), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 2), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 3), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 3), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 3), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 4), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 4), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 4), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 5), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 5), Block::get(0, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 5), Block::get(44, 0));

$level->setBlock(new Vector3($xx, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 1, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 2, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 3, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 4, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 5, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 6, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 7, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 8, $yy + 5, $zz - 6), Block::get(44, 0));
$level->setBlock(new Vector3($xx + 9, $yy + 5, $zz - 6), Block::get(44, 0));
//-
$level->setBlock(new Vector3($xx, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 1, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 1, $zz - 6), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 2, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 2, $zz - 6), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 3, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 3, $zz - 6), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 4, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 4, $zz - 6), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 1), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 1), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 2), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 2), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 3), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 3), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 4), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 4), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 5), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 5), Block::get(4, 0));

$level->setBlock(new Vector3($xx, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 1, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 2, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 3, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 4, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 5, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 6, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 7, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 8, $yy - 5, $zz - 6), Block::get(4, 0));
$level->setBlock(new Vector3($xx + 9, $yy - 5, $zz - 6), Block::get(4, 0));

//Сундук

$pos = new Vector3($xx + 4, $yy + 1, $zz - 5);
$level->setBlock($pos, Block::get(Block::CHEST, Vector3::SIDE_EAST), true);

$chest = Tile::createTile(Tile::CHEST, $level, new CompoundTag("", [
    new StringTag("id", Tile::CHEST),
    new IntTag("x", $pos->x),
    new IntTag("y", $pos->y),
    new IntTag("z", $pos->z)
]));

for($i = 0; $i < 20; $i++){

    $items = [
        264, 264,
        265, 265, 265,
        266, 266, 266,
        297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297, 297,
        297, 322, 322,
        466, 444, 334, 334, 334, 334, 334, 334, 334, 334, 334, 334, 421, 421, 421,
        289, 289, 289, 289, 289, 289, 289, 289, 325, 325, 325, 325, 325, 325, 325, 325, 325, 325, 325, 325,
        296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296, 296,
        352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352, 352,
        367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 367, 
        367, 367, 367, 367, 263, 263, 263, 263, 263, 263, 263, 263, 263, 263
    ];

        $item = array_rand($items);
        $chest->getInventory()->setItem(mt_rand(0, 27), Item::get($items[$item], 0, 1));
    
    }
            }
        }
    }
}

?>