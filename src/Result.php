<?php

namespace Dxw\Result;

abstract class Result
{
    abstract public function unwrap();
    abstract public function isErr(): bool;
    abstract public function getErr(): string;
}
