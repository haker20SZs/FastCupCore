<?php

namespace Fixes;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase as Base;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\scheduler\CallbackTask;
use pocketmine\level\Level;
use pocketmine\entity\Effect;
use pocketmine\event\player\PlayerRespawnEvent;

class Main extends Base implements Listener{

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask(array($this, "onEffectFix")), 1);
	}

	public function onEffectFix(){
	  foreach($this->getServer()->getOnlinePlayers() as $player){
		if($player->getLevel()->getName() == "world"){
	    	$player->addEffect(Effect::getEffect(16)->setDuration(9999*9999*16)->setVisible(false));
	    }elseif($player->getLevel()->getName() == "ender"){
	    	$player->removeEffect(16);
	    }elseif($player->getLevel()->getName() == "nether"){
	    	$player->removeEffect(16);
	    }
	  }
    }

}

?>