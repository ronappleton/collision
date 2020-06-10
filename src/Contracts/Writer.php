<?php

/**
 * This file is part of Collision.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\Collision\Contracts;

use Symfony\Component\Console\Output\OutputInterface;
use Whoops\Exception\Inspector;

/**
 * @internal
 */
interface Writer
{
    /**
     * Ignores traces where the file string matches one
     * of the provided regex expressions.
     *
     * @param string[] $ignore the regex expressions
     *
     * @return Writer
     */
    public function ignoreFilesIn(array $ignore);

    /**
     * Declares whether or not the Writer should show the trace.
     *
     * @param bool $show
     * @return Writer
     */
    public function showTrace($show);

    /**
     * Declares whether or not the Writer should show the title.
     *
     * @param bool $show
     * @return Writer
     */
    public function showTitle($show);

    /**
     * Declares whether or not the Writer should show the editor.
     *
     * @param bool $show
     * @return Writer
     */
    public function showEditor($show);

    /**
     * Writes the details of the exception on the console.
     * @param Inspector $inspector
     */
    public function write(Inspector $inspector);

    /**
     * Sets the output.
     *
     * @return Writer
     */
    public function setOutput(OutputInterface $output);

    /**
     * Gets the output.
     * @return OutputInterface
     */
    public function getOutput();
}
