<?php

namespace App;

class Foo
{
    // FooはBarに依存している(自身のプロパティとしてBarを保持)
    public function __construct(private Bar $bar) { }

    public function useBar(): string
    {
        return $this->bar->doSomething();
    }
}
