<?php
class nilai{
    private$tugas=0;
    private$uts=0;
    private$uas=0;
   
    // setter
    public function setTugas($tugas): void{
        if($tugas<=100 && $tugas>=0){
            $this->tugas=$tugas;
        }else {
            $this->tugas=0;
        }
    }
  
    public function setUts($uts): void{
        if($uts<=100 && $uts>=0){
            $this->uts=$uts;
        }else {
            $this->uts=0;
        }
    }

    public function setUas($uas): void{
        if($uas<=100 && $uas>=0){
            $this->uas=$uas;
        }else {
            $this->uas=0;
        }
    }
    
    // getter
    public function get(): int|mixed{
        return $this->tugas;
    }

    public function getUts(): int|mixed{ 
        return $this->uts;
}

    public function getUas(): int|mixed{
        return $this->uas;
}

//  method
function hitungTotal(): float{
    $nilaiTotal=0.30*$this->tugas+0.35*$this->uts+0.35*$this->uas;
    return $nilaiTotal;
}
}
?>
