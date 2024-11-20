<?php
// buat class
class Kucing{
    // method / function
    public function __construct(){
        echo "Hallo saya Kucing <br>";
    }

    public function makan(){

        echo "Kucing Suka Makan Wiskhas<br>";
    }
    public function minum(){

        echo "Kucing Suka Minum Air<br>";
    }
    
    public function __destruct(){
        echo "Suara Kucing 'Miauuuuuuuuu Ngek'<br>";
    }
}

$cetak = new Kucing();

?>