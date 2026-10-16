<?php

namespace Dxw\Result;

/**
 * @extends Result<mixed>
 * @api
 */
class Err extends Result
{
	/** @var string */
	private $message;

	public function __construct(string $message)
	{
		$this->message = $message;
	}

	#[\Override]
	public function unwrap()
	{
		throw new \RuntimeException("Can't unwrap error");
	}

	#[\Override]
	/**
	@param mixed $default
	@psalm-return mixed
	*/
	public function unwrapOr($default)
	{
		return $default;
	}

	#[\Override]
	public function getErr(): string
	{
		return $this->message;
	}

	#[\Override]
	public function isErr(): bool
	{
		return true;
	}

	#[\Override]
	public function wrap(string $message): \Dxw\Result\Result
	{
		return new self(sprintf('%s: %s', $message, $this->getErr()));
	}
}
