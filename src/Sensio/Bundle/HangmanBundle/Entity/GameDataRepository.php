<?php

namespace Sensio\Bundle\HangmanBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GameDataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GameDataRepository extends EntityRepository
{
    public function reset($player, $data)
    {
    }
    
    public function find($player)
    {
        return $this->findByPlayerId($player->getId()):
    }

    public function save($player, $data)
    {
        // $gameDeta = $this->
    }
}
