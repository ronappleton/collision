<?php

namespace NunoMaduro\Collision\Contracts;

use Facade\IgnitionContracts\Solution;
use Throwable;

/**
 * @internal
 */
interface SolutionsRepository
{
    /**
     * Gets the solutions from the given `$throwable`.
     *
     * @return array<int, Solution>
     */
    public function getFromThrowable(Throwable $throwable);
}
