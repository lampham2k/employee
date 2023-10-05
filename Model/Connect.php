<?php

class Connect {

    private static $dbInstance = null;

    public function sql($sql)
    {

        $connect = Connect::getInstance();

        return mysqli_query($connect,$sql);

    }

    public static function getInstance() {

		if ( self::$dbInstance == null  ) {
			
			try {

                $host = 'db-service:3306';

                $user = 'root';
            
                $password = 'root';
            
                $database = 'bao_tri';

                self::$dbInstance = mysqli_connect($host, $user, $password, $database);
                
			} catch (Exception $e) {

				echo $e->getMessage();
                		
			}
		}
		return self::$dbInstance;
	}
}