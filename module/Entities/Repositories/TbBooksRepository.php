<?php
namespace Entities\Repositories;

/**
 * Repositories/TbBooksRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TbBooksRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAllBooks()
    {
        $query = $this->getEntityManager()
                  ->createQueryBuilder()
                  ->select('a')
                  ->from('Entities\TbBooks', 'a')
                  ->where('a.id=?1')
                  ->setParameter(1, 2)
                  ->getQuery()
                  ->execute();

       return $query;

    }

}
