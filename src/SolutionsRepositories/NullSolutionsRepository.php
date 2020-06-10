<?php

namespace NunoMaduro\Collision\SolutionsRepositories;

use NunoMaduro\Collision\Contracts\SolutionsRepository;
use Throwable;

/**
 * @internal
 */
final class NullSolutionsRepository implements SolutionsRepository
{
    /**
     * {@inheritdoc}
     */
    public function getFromThrowable(Throwable $throwable): array
    {
        return [];
    }
}
