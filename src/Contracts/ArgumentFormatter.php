<?php

namespace NunoMaduro\Collision\Contracts;

/**
 * @internal
 */
interface ArgumentFormatter
{
    /**
     * Formats the provided array of arguments into
     * an understandable description.
     * @param array $arguments
     * @param bool $recursive
     *
     * @return string
     */
    public function format(array $arguments, $recursive = true);
}
