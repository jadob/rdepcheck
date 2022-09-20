<?php

declare(strict_types=1);

namespace Jadob\RecursiveDependencyChecker;

/**
 * Object-oriented representation of composer.json file.
 *
 * @license MIT
 */
class Package
{
    protected array $requires = [];
    protected array $replaces = [];
    protected ?string $license = null;
}