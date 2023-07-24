<?php
namespace Ejetar\ClickUpAPIClient\Resources;

use Ejetar\ClickUpAPIClient\Client;

class Teams {
	public function __construct(public Client $client) {

	}

	public function list() {
		return $this->client->request->get("/team");
	}
}
