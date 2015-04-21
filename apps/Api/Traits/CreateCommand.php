<?php

namespace Api\Traits;

trait CreateCommand
{
	public function Create($f3)
	{
		$this->initializePusher();


		$data = array(
				"id" => $f3->get("PARAMS.id")
			);

		$this->pusher->trigger( $this->channel, "create".$this->suffix, $data );
	}

	public function Command($f3)
	{
		$this->initializePusher();


		$data = array(
				"id" => $f3->get("PARAMS.id"),
				"command" => $f3->get("PARAMS.code"),
			);

		$this->pusher->trigger( $this->channel, "command".$this->suffix, $data );
	}
}
?>