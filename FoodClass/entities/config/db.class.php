<?php  // IDEA: :
	Class Db{
	   protected static $connection;
       public function connect(){
        if(!isset(self::$connectionection)){
            $config = parse_ini_file("config.ini");
            self::$connection = new mysqli("localhost",$config["username"], $config["password"], $config["databasename"]);
        }
        if(self::$connection == false){
         return false;
		}
		mysqli_set_charset(self::$connection,"utf-8");
        return self::$connection;
	   }
	   
			 public function query_excute ($queryString)
	 		 {
	 			// code...
				 $connection= $this->connect();
				 $connection->query("SET NAME utf8");
	 			$result = $connection -> query($queryString);
	 			//$connectionection ->close();
				 return $result;
				 $connection ->close();

	 		 }
	 		public function select_to_array($queryString)
	 		{
	 			// code...
	 			$row = array();
	 			$result = $this -> query_excute($queryString);
	 			if ($result==false) {
	 				// code...
	 				return false;
	 			}
	 			while ($item = $result ->fetch_assoc()) {
	 				// code...
	 				$row[] = $item;
	 			}
	 			return $row;
	 		}
	}
?>
