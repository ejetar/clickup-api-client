<?php
namespace Ejetar\ClickUpAPIClient\Resources;

use Ejetar\ClickUpAPIClient\Client;

class Tasks {
	public function __construct(public Client $client) {

	}

	public function time_entries($team, $query = "") {
		return $this->client->request->get("/team/$team/time_entries?$query");
	}
}
