<?php

declare(strict_types=1);

namespace Shared\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

abstract class DoctrineAbstractRepository
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function em(): EntityManagerInterface
    {
        return $this->em;
    }

    public function repository(): EntityRepository
    {
        return $this->em->getRepository($this->entityRepositoryClass());
    }

    abstract function entityRepositoryClass(): string;
}