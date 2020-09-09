<?php
namespace Database;

require_once $_SERVER['DOCUMENT_ROOT']."/Config/Database.php";

class Connection
{
    protected static $conn;
    protected static $instance;


	protected function __construct()
    {

        self::$conn = new \PDO(sprintf('mysql:host=%s;dbname=%s',DB_HOST,DB_DATABASE),DB_USERNAME ,DB_PASSWORD  );

    }

    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        } else {
            return self::$instance = new Connection();
        }
    }

	public static function executeQuery($query)
	{

		$result = self::$conn->query($query);
		return $result;
	}
	public static function executeData($query)
	{
		$num = 0;
		try
		{
			$result = self::$conn->exec($query);
			$num = self::$conn->lastInsertId();

		}
		catch(\PDOException $e)
		{
			echo $query . "<br>" . $e->getMessage();
		}

		return $num;
	}

    public static function close_Connection()
    {
        self::$conn = null ;
    }

}
