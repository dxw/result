<?php

namespace Dxw\Result;

interface Result
{
    public function unwrap();
    public function isErr(): bool;
    public function getErr(): string;
}
