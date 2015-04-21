<?php

namespace Api\Board;

class Board extends \Api\Pushable
{
	protected $channel = "Boards";
	protected $suffix = "Board";

	use \Api\Traits\CreateCommand;
}