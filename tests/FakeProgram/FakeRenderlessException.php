<?php

namespace Tests\FakeProgram;

use Exception;
use NunoMaduro\Collision\Contracts\RenderlessEditor;
use NunoMaduro\Collision\Contracts\RenderlessTrace;

class FakeRenderlessException extends Exception implements RenderlessEditor, RenderlessTrace
{
}
