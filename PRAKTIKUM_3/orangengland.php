<?php

require_once"orang.php";

class orangenland extends orang{
    // Override
    public function ucapSalam(){
        echo "hello my friends" . $this->nama . "<br>";
    }
}