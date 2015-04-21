<?php

namespace Api\BoardMain;

class BoardMain extends \Api\Pushable
{
	public function Create($f3)
	{
		$this->initializePusher();


		$data = array(
				"id" => $f3->get("PARAMS.id")
			);

		$this->pusher->trigger( "boards", "createBoard", $data );
	}

	public function Command($f3)
	{
		$this->initializePusher();


		$data = array(
				"id" => $f3->get("PARAMS.id"),
				"command" => $f3->get("PARAMS.code"),
			);

		$this->pusher->trigger( "boards", "command", $data );
	}
}