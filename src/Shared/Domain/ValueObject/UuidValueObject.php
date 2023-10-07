<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

use Shared\Domain\Exception\InvalidUuidValueObject;
use Ramsey\Uuid\Uuid as RamseyUuid;

class UuidValueObject extends StringValueObject
{
    public function __construct(string $value)
    {
        $this->ensureValidUuid($value);
        parent::__construct($value);
    }

    private function ensureValidUuid(string $value): void
    {
        if (false === RamseyUuid::isValid($value)) {
            throw new InvalidUuidValueObject($value);
        }
    }
}