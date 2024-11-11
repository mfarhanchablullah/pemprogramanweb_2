<?php


class orang {
    // property
    public $nama;
    public $tgllahir;
    public $alamat;

    //method

    public function ucapSalam(){
        echo "<h2> Hallo, perkenalkan nama saya " . $this->nama . "<h2>";
    }
}
?>
