<?php

namespace Tests\FakeProgram;

class HelloWorldFile4
{
    public static function say()
    {
        return new FakeRenderlessException('Fail renderless description');
    }
}
