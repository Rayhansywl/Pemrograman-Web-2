<?php 

require_once 'buku.php';

class listBuku {
  public function getData() {
    $list_buku  = array  (
      new buku('Belajar php dasar', 'James W.', 'Informatika', '2024'),
      new buku('Matematika diskrit', 'Emely S.', 'andi publisher', '2017'),
      new buku('kalkulus 2', 'Robert R.', 'Erlangga', '2020'),
      new buku('Metode penelitian', 'Santi O.', 'Informatika', '2018'),
      new buku('king madrid', 'ancelloti', 'madridista', '2024')
    );
    return $list_buku;
  }
}