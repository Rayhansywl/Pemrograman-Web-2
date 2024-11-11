<?php 

require_once "orang.php";

class orangInggris extends orang{
  // overrid
  public function ucapSalam() {
    echo "hello my name is ". $this->nama."<br>";
  }
}
?>