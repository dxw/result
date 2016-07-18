<?php

namespace Dxw\Result;

class Err implements Result
{
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function unwrap()
    {
        throw new \RuntimeException("Can't unwrap error");
    }

    public function getErr(): string
    {
        return $this->message;
    }

    public function isErr(): bool
    {
        return true;
    }
}
