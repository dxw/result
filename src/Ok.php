<?php

namespace Dxw\Result;

/** @template T
 * @extends Result<mixed>
 * @api
 */

class Ok extends Result
{
	/** @var T */
	private $value;

	/** @param T $value */
	public function __construct($value)
	{
		$this->value = $value;
	}

	#[\Override]
	/** @return T */
	public function unwrap()
	{
		return $this->value;
	}

	#[\Override]
	public function unwrapOr($default)
	{
		return $this->unwrap();
	}

	#[\Override]
	public function isErr(): bool
	{
		return false;
	}

	#[\Override]
	public function getErr(): string
	{
		throw new \RuntimeException("This is not an error value");
	}

	#[\Override]
	public function wrap(string $message): \Dxw\Result\Result
	{
		throw new \RuntimeException("This is not an error value");
	}
}
