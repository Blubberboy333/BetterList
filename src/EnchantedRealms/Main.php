<?php

namespace Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	      public function onEnable(){
		            $this->getLogger()->info(C::YELLOW . "Enabled BetterList!");
	 }
	
   public function onCommand(CommandSender $sender, Command $command, $label, array $args){
            if(strtolower($cmd->getName()) == "list"){
              $online = ???
              $maxplayers = ???
                $sender->sendMessage("§");
                $sender->sendMessage("§aPlayer Count§c:§b $online §3/§b $maxplayers!);
