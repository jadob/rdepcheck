<?php

declare(strict_types=1);

namespace Jadob\RecursiveDependencyChecker;

class ViolationCollection
{

    protected array $violations = [];

    public function add(string $message): void
    {
        $this->violations[] = $message;
    }
}