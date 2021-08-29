<?
// mysql://ua06gkvp4d12mm1c:d7oj9xfbcqcuqzww@s29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/uwfrauncnyex77g1
    class DB {
        public $__connect;
        public function __construct()
        {
            $this->__connect = new mysqli('s29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'ua06gkvp4d12mm1c', 'd7oj9xfbcqcuqzww', 'uwfrauncnyex77g1');
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