<?php

namespace Api\BoardItem;

class Routes
{
	private $app = null;

	public function __construct( $f3){
		$this->app = $f3;
	}

	public function RegisterRoutes()
	{
		$this->app->route('GET /boardItem/create/@id', "\\Api\\BoardItem\\BoardItem->Create");
		$this->app->route('GET /boardItem/@id/command/@code', "\\Api\\BoardItem\\BoardItem->Command");
	}
}