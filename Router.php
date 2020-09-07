<?php
$url = str_replace(".php","",(explode("?",$_SERVER['REQUEST_URI']))[0]) ;

$method = $_SERVER['REQUEST_METHOD'];

var_dump([$method,$url]);
if ($method == "Post")
{

}

elseif ($method == "Get")
{
    switch ($url)
    {

    }
}