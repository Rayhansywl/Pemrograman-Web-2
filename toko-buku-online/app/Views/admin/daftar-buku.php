<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Buku</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Berhasil di tambahkan</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb-3">
    <div class="alert alert-success">
        <strong>Gagal di tambahkan!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn 
    btn-primary">Tambah Buku</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($books as $buku): ?>
                    <tr>
                        <th scope="row"><?= $buku['id_buku']?></th>
                        <td><?= $buku['judul']?></td>
                        <td><?= $buku['pengarang']?></td>
                        <td><?= $buku['penerbit']?></td>
                        <td><?= $buku['tahun']?></td>
                        <td>
                            <img src="<?= base_url('file-image/') . $buku['cover']?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                             <?= $buku['harga']?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-buku/edit') .  $buku['id_buku']?>" class="btn
                            btn-success">Edit</a>
                            <a href="<?= base_url('admin/daftar-buku/hapus') .  $buku['id_buku']?>" class="btn
                            btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>