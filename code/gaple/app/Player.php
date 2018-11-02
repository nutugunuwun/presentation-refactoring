<?php

namespace App;

class Player
{
    private $id;
    private $name;
    private $cardset = [];
    
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getTotalCards(): int
    {
        return count($this->cardset);
    }
    
    public function hasCards(): bool
    {
        return !empty($this->getTotalCards());
    }
}