<?php

namespace Api\BoardMain;

class BoardMain extends \Api\Pushable
{
	protected $channel = "boards";
	protected $suffix = "Board";

	use \Api\Traits\CreateCommand;
}