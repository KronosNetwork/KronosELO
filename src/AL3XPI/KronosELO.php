<?php
namespace AL3XPI;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class ELOsystem extends PluginBase implements Listener {
    public function onLoad() {
      $this->getLogger()->info("KronosELO by AL3XPI starting...");
    }
    public function onEnable(){
      $this->getLogger()->info("Enabled KronosELO by AL3XPI");
    }
    public function onDisable(){
      $this->getLogger()->info("KronosELO by AL3XPI disabled");
    }
}
    
