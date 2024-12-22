<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">No. HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">Rayhan Syawal</th>
                <th scope="row">0965475278</th>
                <th scope="row">kel. Payo Selincah</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>