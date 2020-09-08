<?php

//require $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

namespace Models;

require $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';



use Database\Database;

class Therapy
{


	public $table = "therapies";


    public function index()
    {
    	$response = [];
		$therapists = Database::select($this->table);

		$response['data']=$therapists;

		echo(json_encode($response));
    }
}




