<?php

namespace Api\BoardMember;

class Routes
{
	private $app = null;
	protected $suffix = "BoardMember";
	use \Api\Traits\CommonRoutes;

	public function __construct( $f3){
		$this->app = $f3;
	}

	public function RegisterRoutes()
	{
		$this->RegisterRoutesCommon();
	}
}