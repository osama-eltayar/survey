<?php
require_once 'bootstrap.php';

$fullUrl = parse_url( $_SERVER['REQUEST_URI'] );
$url = str_replace("router/","",$fullUrl['path']) ;
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "Post")
{

}

elseif ($method == "GET")
{
	$params =[];
	array_key_exists("query",$fullUrl) ? parse_str($fullUrl['query'],$params):[];

    switch ($url)
    {
		case "/therapies":
			(new \Models\Therapy())->index();
			break;
		case "/audiences":
			(new \Models\Audience())->index();
			break;
		case "/diseases":
			(new \Models\Disease())->index($params);
			break;
		case "/topics":
			(new \Models\Topic())->index($params);
			break;
    }
}
