<?php
    class Detabase
    {
        private $database,$user,$server,$password;

        public function __construct()
        {
            $this->database = "itexperts1";
            $this->user = "root";
            $this->password = "";
            $this->server="localhost";
            echo "<br/> constructor called.....";
        }
        public function __toString()
        {
            echo "<table border='1' width='50%' cellpadding='5'>";
            echo "<tr><th>variable</th><th>value</th></tr>";

        foreach($this as $key=>
        )
        }
    }
?>