<?php 
class segitiga{
    public $alas;
    public $tinggi;
    public $luas;

    function __construct($alas, $tinggi) {
        $this->setAlas($alas);
        $this->setTinggi($tinggi);
    }

    private function hitungLuas() {
        $this->luas = $this->alas * $this->tinggi / 2;
    }
    
    private function setalas($alas) {
        $this->alas = $alas;
        $this->hitungLuas();
    }

    private function settinggi($tinggi) {
        $this->tinggi = $tinggi;
        $this->hitungLuas();
    }

    public function getpanjang() {
        return $this->alas;
    }

    public function getlebar() {
        return $this->tinggi;
    }
    
    public function getLuas() {
        return $this->luas;
    }
}


$segitiga = new SegiTiga(10, 5);
echo $segitiga->getLuas();