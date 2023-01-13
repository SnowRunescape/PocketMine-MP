<?php

namespace Example;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->getServer()->getLogger()->info("§7Plugin §7ativado com sucesso!");
    }
}
