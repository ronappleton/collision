<?php

namespace NunoMaduro\Collision\Contracts;

use Symfony\Component\Console\Output\OutputInterface;
use Whoops\Handler\HandlerInterface;

/**
 * @internal
 */
interface Handler extends HandlerInterface
{
    /**
     * Sets the output.
     *
     * @return Handler
     */
    public function setOutput(OutputInterface $output);

    /**
     * Returns the writer.
     *
     * @return Writer
     */
    public function getWriter();
}
