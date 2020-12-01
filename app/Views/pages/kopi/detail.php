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
                            <p class="card-text"><b>Umur Simpan : </b> <?= $kopi['umur_simpan']; ?></p>

                            <a href="/KopiController/edit/<?= $kopi['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/KopiController/delete/<?= $kopi['id']; ?>" method="post" class="d-inline">
                                <input type="hidden" name="method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                            </form>

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