<?php

namespace Proposal\WebBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Proposal1Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Proposal1Repository extends EntityRepository
{
    public function findLatest(){
        $sql = 'SELECT * FROM `Proposal1` order by id DESC limit 1';
        $res = mysql_query($sql);
        $output = mysql_fetch_assoc($res);
        return $output;
    }
}
