<?php


namespace Includes\Database;


class Database extends Connection
{
    protected function __construct()
    {
        parent::__construct();
    }

    public static function getInstance()
    {
        if (parent::$instance) {
            return self::$instance;
        } else {
            return self::$instance = new Database();
        }
    }

	/**
	 * @param $table
	 * @param array $params
	 */
	public function insert($table ,Array $params)
	{
		self::getInstance();

		$attributes = "";
		$holders = "";
		$values = "";
		foreach ($params as $key => $value)
		{
			$attributes .= $key."," ;
			$holders .= "?," ;
			$values .= $value."," ;
		}
		$sql = "insert into $table ($attributes) values ($values)";

		if(self::$conn->query($sql))
		{
			self::close_Connection();
		}
	}

	public function select($table,Array $params)
	{

	}

}
