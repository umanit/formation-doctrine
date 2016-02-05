<?php

namespace Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function searchSubject($subject)
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.subject LIKE :post_subject')
            ->orderBy('p.date', 'DESC')
            ->setParameter('post_subject', '%'.$subject.'%')
            ->getQuery()
            ->getResult()
        ;
    }
}
