<?php

namespace Api\BoardItem;

class BoardItem extends \Api\Pushable
{
	protected $channel = "BoardItems";
	protected $suffix = "BoardItem";

	use \Api\Traits\CreateCommand;
}