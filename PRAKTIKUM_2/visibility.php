<!-- visibility.php -->
<?php


class visibility{
    public $public;
    private $private;
    protected $protected;

    function tampilkanProperty(): void{
        echo"ini diakses di dalam kelas".'<br>';
        echo"public : " . $this->public.'<br>';
        echo"protected : ".$this->protected.'<br>';
        echo"private : ". $this->private. '<br>';
 }
}
?>