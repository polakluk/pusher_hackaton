<?php

namespace Api\BoardMain;

class Routes
{
	private $app = null;

	public function __construct( $f3 ){
		$this->app = $f3;
	}

	public function RegisterRoutes()
	{
		$this->app->route('GET /board/create/@id', "\\Api\\BoardMain\\BoardMain->Create");
		$this->app->route('GET /board/@id/command/@code', "\\Api\\BoardMain\\BoardMain->Command");
	}
}