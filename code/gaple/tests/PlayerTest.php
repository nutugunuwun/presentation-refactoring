<?php

use PHPUnit\Framework\TestCase;
use App\Player;

class PlayerTest extends TestCase
{
    
    private $player;
    
    public function setUp()
    {
        parent::setUp();
        $this->player = new Player;
    }
    
    public function testIdPemain()
    {
        $expected = 3;
        
        $this->player->setId(3);
        
        $result = $this->player->getId();
        
        $this->assertEquals($expected, $result);
    }
    
    public function testNamaPemain()
    {
        $expected = 'Elizabeth';
        
        $this->player->setName('Elizabeth');
        
        $result = $this->player->getName();
        
        $this->assertEquals($expected, $result);
    }
}