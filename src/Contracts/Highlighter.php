<?php

namespace NunoMaduro\Collision\Contracts;

/**
 * @internal
 */
interface Highlighter
{
    /**
     * Highlights the provided content.
     */
    public function highlight($content, $line);
}
