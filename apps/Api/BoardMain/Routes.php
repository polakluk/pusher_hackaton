<?php

namespace Api\BoardMain;

class Routes
{

	private $pusher = null;
	private $app = null;

	public function __construct( $f3, $pusher_tmp ){
		$this->app = $f3;
		$this->pusher = $pusher_tmp;
	}

	public function RegisterRoutes()
	{
		$this->app->route('GET /board/create/@id', "\\Api\\BoardMain\\BoardMain->Create");
		$this->app->route('GET /board/@id/command/@code', "\\Api\\BoardMain\\BoardMain->Command");
	}
}