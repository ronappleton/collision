<?php

namespace NunoMaduro\Collision\Contracts;

/**
 * @internal
 */
interface Provider
{
    /**
     * Registers the current Handler as Error Handler.
     *
     * @return Provider
     */
    public function register();

    /**
     * Returns the handler.
     *
     * @return Handler
     */
    public function getHandler();
}
