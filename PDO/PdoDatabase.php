<?php
    error_reporting(E_ERROR | E_PARSE);
    class PdoDatabase
    {
        private $utf8="set names utf8";
        private $database="cmu_test";
        private $server="mysql:host=localhost;dbname=";
        private $username="root";
        private $password="";
        private $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,];
        protected $conn;

        public function open()
        {
            try
            {
                $this->conn=new PDO($this->server.$this->database,$this->username,$this->password,$this->options);
                $this->conn->exec($this->utf8);
                return $this->conn;
            }
            catch(PDOException $e)
            {
                echo("Error pdo_db connetion : ".$e->getMessage());
            }
            finally
            {
                $this->close();
            }

        }

        public function close()
        {
            $this->conn=null;
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