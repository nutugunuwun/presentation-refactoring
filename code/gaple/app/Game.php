<?php

namespace App;

class Game
{
    private $players = [];
    
    public function addPlayer(string $name=''): void
    {
        $idPlayer = count($this->players) + 1;
        
        if (empty($name)) $name = 'Player-' . $idPlayer;
        
        $player = new Player;
        $player->setId($idPlayer);
        $player->setName($name);
        
        array_push($this->players, $player);
    }
    
    public function removePlayer(int $index): void
    {
        foreach($this->players as $key=>$player){
            if ($player->getId()==$index)
                unset($this->players[$key]);
        }
    }
    
    public function getTotalPlayer(): int
    {
        return count($this->players);
    }
    
    public function getPlayer(int $index): ?Player
    {
        foreach($this->players as $player){
            if ($player->getId()==$index)
                return $player;
        }
        
        return NULL;
    }
    
    public function shareCards(): void
    {
        
    }
}