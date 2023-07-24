<?php

namespace Ejetar\ClickUpAPIClient;

use Ejetar\ClickUpAPIClient\Resources\Tasks;
use Ejetar\ClickUpAPIClient\Resources\Teams;

class Client {
	public Teams $teams;
	public Tasks $tasks;
	public Request $request;

	public function __construct(public $token) {
		$this->teams = new Teams($this);
		$this->tasks = new Tasks($this);
		$this->request = new Request($token);
	}
}
