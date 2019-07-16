<?php

namespace Dxw\Result;

/** @template T */

abstract class Result
{
    /** @return T */
    abstract public function unwrap();
    abstract public function isErr(): bool;
    abstract public function getErr(): string;
    abstract public function wrap(string $message): \Dxw\Result\Result;

    /** @param T $value */
    public static function ok($value): \Dxw\Result\Result
    {
        return new \Dxw\Result\Ok($value);
    }

    public static function err(string $value): \Dxw\Result\Result
    {
        return new \Dxw\Result\Err($value);
    }
}
