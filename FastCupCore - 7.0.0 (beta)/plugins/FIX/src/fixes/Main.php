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

		$this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask(array($this, "onEffectFix")), 20);
		$this->getServer()->getPluginManager()->registerEvents($this, $this);

	}

	public function onEffectFix(){
		foreach($this->getServer()->getOnlinePlayers() as $player){
			$player->addEffect(Effect::getEffect(16)->setDuration(9999*9999*16)->setVisible(false));
		}
    }

}

?>