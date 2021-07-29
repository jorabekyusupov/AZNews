<?
    class DB {
        public $__connect;
        public function __construct()
        {
            $this->__connect = new mysqli('aznewsa.mysql.database.azure.com', 'YUSUPOV@aznewsa', '8118787Aa', 'aznew');
        }
        function getConnect()
        {
            if (!$this->__connect -> connect_error) {
                return $this->__connect;
            }
            else {
            echo "Connection Error".$this->__connect->connect_error; 
            }
        }




    }




?>