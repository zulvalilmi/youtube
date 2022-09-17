<?php

class mobil {
    public $warna;
    public $harga;
    public $model;
    
    
    public function __construct($warna, $harga, $model){
        $this->warna = $warna;
        $this->harga = $harga;
        $this->model = $model;

    }

    public function showMobil(){
        return 
        "model $this->model
        <br> 
        Harga $this->harga
        <br>
        Warna $this->warna";

    }
   
}

$mobil = new Mobil("merah", "2000.000.000", "toyota");
print $mobil->showMobil();


?>
