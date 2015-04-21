<?php

namespace Api\Traits;

trait CommonCommand
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

	public function Updated($f3)
	{
		$this->initializePusher();

		$command = empty($f3->get("PARAMS.code"))
					? 1
					: $f3->get("PARAMS.code" );

		$data = array(
				"id" => $f3->get("PARAMS.id"),
				"command" => $command,
				"data" => $f3->get("POST.data")
			);

		$this->pusher->trigger( $this->channel, "updated".$this->suffix, $data );
	}


	public function UpdatedPost($f3)
	{
		$this->initializePusher();

		$command = empty($f3->get("PARAMS.code"))
					? 1
					: $f3->get("PARAMS.code" );

		$data = array(
				"id" => $f3->get("PARAMS.id"),
				"command" => $command,
				"data" => $f3->get("POST.data")
			);

		$this->pusher->trigger( $this->channel, "updated".$this->suffix, $data );
	}
}