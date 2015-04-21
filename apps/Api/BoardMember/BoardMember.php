<?php

namespace Api\BoardMember;

class BoardMember extends \Api\Pushable
{
	protected $channel = "BoardMembers";
	protected $suffix = "BoardMember";

	use \Api\Traits\CommonCommand;
}