<?php 
class PersegiPanjang{
    public $panjang;
    public $lebar;
    public $luas;

    function __construct($panjang, $lebar) {
        $this->setpanjang($panjang);
        $this->setlebar($lebar);
    }

    private function hitungLuas() {
        $this->luas = $this->panjang * $this->lebar;
    }
    
    private function setpanjang($panjang) {
        $this->panjang = $panjang;
        $this->hitungLuas();
    }

    private function setlebar($lebar) {
        $this->lebar = $lebar;
        $this->hitungLuas();
    }

    public function getpanjang() {
        return $this->panjang;
    }

    public function getlebar() {
        return $this->lebar;
    }

    public function getLuas() {
        return $this->luas;
    }
}


$Persegipanjang = new PersegiPanjang(10, 5);
echo $Persegipanjang->getLuas();

?>