<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Kopi</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $kopi['gambar'] ?>" class="card-img" alt="..." width="70">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kopi['jenis']; ?></h5>
                            <p class="card-text"><b>Berat : </b> <?= $kopi['berat']; ?></p>
                            <p class="card-text"><b>Harga : </b> <?= $kopi['harga']; ?></p>
                            <p class="card-text"><b>Kadaluarsa : </b> <?= $kopi['kadaluarsa']; ?></p>
                            <p class="card-text"><b>Umur Simpan : </b> <?= $kopi['umur simpan']; ?></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>

                            <br><br>
                            <a href="/KopiController">Kembali ke daftar kopi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>