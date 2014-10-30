<?php
namespace Jim\P0700Bundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT u FROM Jim\P0700Bundle\Entity\User u
                                    ORDER BY u.name ASC')
                    ->getResult();
    }
}
