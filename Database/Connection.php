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
//		var_dump(self::$conn);
//        $this->checkConnection();
    }
//    private function checkConnection()
//    {
//        if (self::$conn->er) {
//            die('failed to connect to DB ' . self::$conn->connect_error );
//        }
//    }
    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        } else {
            return self::$instance = new Connection();
        }
    }

//    public function run_query($query, $params_types = null, $param_value_array = [])
//    {
//        $stmt = self::$conn->prepare($query);
//        if ($stmt) {
//            if($params_types)
//                $stmt->bind_param($params_types, ...$param_value_array);
//            $stmt->execute();
//            $result = $stmt->get_result();
//            if ($result->num_rows > 0)
//            {
//                while ($row = $result->fetch_assoc()) {
//                    $result_set[] = $row;
//                }
//            }
//            if(!empty($result_set))
//            {
//                return $result_set;
//            }
//
//                return null;
//        }
//        else
//        {
//            die('query failed'. self::$conn->error);
//        }
//    }

	public static function executeQuery($query)
	{

		$result = self::$conn->query($query);
//		self::close_Connection();
		return $result;
	}

    public static function close_Connection()
    {
        self::$conn = null ;
    }

}
