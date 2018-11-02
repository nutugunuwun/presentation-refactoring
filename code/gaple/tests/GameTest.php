<?php

use PHPUnit\Framework\TestCase;
use App\Game;

class GameTest extends TestCase
{
    private $game;
    
    public function setUp()
    {
        parent::setUp();
        $this->game = new Game;
    }
    
    public function testTambahPemain()
    {
        $expected = 4;
        
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        
        $result = $this->game->getTotalPlayer();
        
        $this->assertEquals($expected, $result);
    }
    
    public function testAmbilDataPemain()
    {
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        
        $player = $this->game->getPlayer(2);
        
        $this->assertEquals(2, $player->getId());
    }
    
    public function testHapusPemain()
    {
        $expected = 3;
        
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->addPlayer();
        $this->game->removePlayer(1);
        
        $result = $this->game->getTotalPlayer();
        
        $this->assertEquals($expected, $result);
    }
    
    
   
    public function tearDown()
    {
        parent::tearDown();
    }
}