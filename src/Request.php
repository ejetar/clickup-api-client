<?php

namespace Ejetar\ClickUpAPIClient;

use Httpful;

class Request {
	public $prefix = "https://api.clickup.com/api/v2";

	public function __construct(public $token) {

	}

	public function get($url) {
		return Httpful\Request::get($this->prefix.$url)
			->addHeaders([
				'Authorization' => $this->token,
				'Content-Type'  => 'application/json'
			])
			->expectsJson()
			->send();
	}
}
