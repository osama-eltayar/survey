<?php
/**
 * Created by PhpStorm.
 * User: Osama.Ragab
 * Date: 9/8/2020
 * Time: 2:57 PM
 */

namespace Models;


use Database\Database;

class Topic
{
	public $table = "topics";


	public function index(Array $params=[])
	{
		$response = [];
		$topics = Database::select($this->table,[],$params);

		$response['data']=$topics;

		echo(json_encode($response));
	}
}
