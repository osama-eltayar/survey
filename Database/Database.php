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

    /**
     * @param $table
     * @param array $params
     * @param array $conditions
     */
    public function select($table, Array $params=[], Array $conditions =[])
	{
	    $params = ! empty($params) ? implode(",",$params) : "*";

	    $filters = "";
        foreach ($conditions as $key => $value)
        {
           $filters .= "$key = $value";
        }
	    $sql = "select $params from $table";

        if (! empty($filters))
        {
            $sql .= $filters ;
        }
        $sql

	}

}
