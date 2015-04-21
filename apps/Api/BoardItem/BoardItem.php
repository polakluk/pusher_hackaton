<?php

namespace Api\BoardItem;

class BoardItem extends \Api\Pushable
{
	protected $channel = "boardItems";
	protected $suffix = "BoardItem";

	use \Api\Traits\CreateCommand;
}