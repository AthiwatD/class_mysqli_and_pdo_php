<?php
    class MysqliDatabase
    {
        private $char_utf8="utf8";
        private $utf8="utf8_general_ci";
        private $server="localhost";
        private $username="root";
        private $password="";
        private $database="cmu_test";
        protected $conn;

        public function open()
        {
            try
            {
                ini_set('display_errors', 1);
                error_reporting(~0);
                $this->conn=mysqli_connect($this->server,$this->username,$this->password,$this->database) or die("mysqli connect error : ".mysqli_connect_error());
                mysqli_set_charset($this->conn,$this->char_utf8)or die("mysqli charset error : ".mysqli_error($conn));
                mysqli_query($this->conn,"SET collation_connection='{$this->utf8}'")or die("mysqli collation_connection error : ".mysqli_error($conn));
                return $this->conn;
            }
            catch(Exception $e)
            {
                echo("Error in db connetion : ".$e->getMessage());
            }
        }
        
        public function close()
        {
            try
            {
                mysqli_close($this->conn);
            }
            catch(Exception $e)
            {
                echo("Error in db connetion : ".$e->getMessage());
            }
        }

        public function br()
        {
            echo "</br>";
        }

        public function hr()
        {
            echo "<hr>";
        }

    }
?>