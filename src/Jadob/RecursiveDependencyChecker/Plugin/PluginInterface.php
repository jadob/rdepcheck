<?php

declare(strict_types=1);

namespace Jadob\RecursiveDependencyChecker\Plugin;

use Jadob\RecursiveDependencyChecker\Package;
use Jadob\RecursiveDependencyChecker\ViolationCollection;

interface PluginInterface
{
    public function validate(Package $package, ViolationCollection $violations): void;
}