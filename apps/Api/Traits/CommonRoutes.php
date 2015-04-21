<?php

namespace Api\Traits;

trait CommonRoutes
{
	public function RegisterRoutesCommon()
	{
		$this->app->route('GET /'.$this->suffix.'/create/@id', "\\Api\\'.$this->suffix.'\\'.$this->suffix.'->Create");
		$this->app->route('GET /'.$this->suffix.'/@id/command/@code', "\\Api\\'.$this->suffix.'\\'.$this->suffix.'->Command");
	}
}
?>