<?php

namespace AppBundle\Repository\Blog;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function drop() {
        $query = $this->_em->createQuery('DELETE AppBundle:Blog\Category c');
        $query->execute();
    }
}
