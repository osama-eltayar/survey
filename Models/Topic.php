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

	public function store($params)
	{
//		var_dump($params);
		$userId = Database::insert('users',$params['user']);
		$params['topics']['user_id'] = $userId ;
		Database::insert('user_topics',$params['topics']);
		var_dump("done");

	}
}
