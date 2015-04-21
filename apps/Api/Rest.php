<?php

namespace Api;


class Rest{
	private $pusher = null;

	private $app = null;

	public function __construct( $f3 ){
		$this->app = $f3;
	}

	private function initializePusher(){
		$app_id = '116638';
		$app_key = 'a14e7c225a1074ff6cc7';
		$app_secret = 'b2b5da8e76308fd59cfe';

		$this->pusher = new \Pusher($app_key, $app_secret, $app_id);
	}

	public function InitializeParts()
	{
		$this->initializePusher();
		$boardMainRoutes = new \Api\BoardMain\Routes( $this->app, $this->pusher );
		$boardMainRoutes->RegisterRoutes();
	}
}