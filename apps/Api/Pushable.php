<?php

namespace Api;

class Pushable{
	protected $pusher = null;

	protected function initializePusher(){
		$app_id = '116638';
		$app_key = 'a14e7c225a1074ff6cc7';
		$app_secret = 'b2b5da8e76308fd59cfe';

		$this->pusher = new \Pusher($app_key, $app_secret, $app_id);
	}
}