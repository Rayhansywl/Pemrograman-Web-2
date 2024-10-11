<?php 

class orang {
  //properti
  public $nama;
  public $tgllahir;
  public $alamat;

  // construktor
  public function __construct() {
    $this->nama="Anonymous";
  }

// method
public function ucapSalam(){
echo"<h2>Hallo, perkenalkan nama saya".$this->nama."</h2>";

}

// destructor
public function __destruct(){
  echo"Ini adalah destruktor dari".$this->nama."<br>"; 
}
}