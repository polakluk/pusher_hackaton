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
		$this->app->route('GET /Board', "\\Api\\BoardMain\\BoardMain->CreateBoard");
	}
}