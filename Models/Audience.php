<?php
/**
 * Created by PhpStorm.
 * User: Osama.Ragab
 * Date: 9/8/2020
 * Time: 2:56 PM
 */

namespace Models;


use Database\Database;

class Audience
{
	public $table = "audiances";


	public function index()
	{
		$response = [];
		$audiences = Database::select($this->table);

		$response['data']=$audiences;

		echo(json_encode($response));
	}
}
