<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObject;

class StringValueObject
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public static function random(): self
    {
        return new self(RamseyUuid::uuid4()->toString());
    }
}