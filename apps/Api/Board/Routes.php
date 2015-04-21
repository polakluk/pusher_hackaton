<?php

namespace Api\Board;

class Routes
{
	private $app = null;

	protected $suffix = "Board";
	use \Api\Traits\CommonRoutes;

	public function __construct( $f3 ){
		$this->app = $f3;
	}

	public function RegisterRoutes()
	{
		$this->RegisterRoutesCommon();
	}
}