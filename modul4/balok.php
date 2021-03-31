<?php 

    class Balok{
        private $panjang = 'None';
        private $lebar = 'None';
        private $tinggi = 'None';

        public function setPanjang($Panjang_name){
            $this-> panjang = $Panjang_name;
        }
        public function getPanjang(){
            return $this->panjang;
        }
        public function setlebar($lebar_name){
            $this-> lebar =$lebar_name;
        }
        public function getlebar(){
            return $this->lebar;
        }
        public function settinggi($tinggi_name){
            $this->tinggi = $tinggi_name;
        }
        public function gettinggi(){
            return $this->tinggi;
        }
        public function getLuas(){
            $luas = 0;
            $luas = 2*($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
            return $luas;
        }
        public function getVolume(){
            $volume = 0;
            $volume = ($this->panjang * $this->lebar * $this->tinggi);
            return $volume;
        }
    }


?>