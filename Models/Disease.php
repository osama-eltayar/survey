<?php
/**
 * Created by PhpStorm.
 * User: Osama.Ragab
 * Date: 9/8/2020
 * Time: 2:55 PM
 */

namespace Models;


use Database\Database;

class Disease
{
	public $table = "diseases";


	public function index(Array $params=[])
	{

		$response = [];
		$diseases = Database::select($this->table,[],['therapy_id'=>$params['therapy_id']]);

		$response['data']=$diseases;

		echo(json_encode($response));
	}
}
