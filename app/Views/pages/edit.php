<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Kopi</h2>
            <form action="/KopiController/update/<?= $kopi['id']; ?>" method="post">
                <input type="hidden" name="slug" value="<?= $kopi['slug']; ?>">
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $kopi['gambar']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $kopi['jenis']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="berat" name="berat" value="<?= $kopi['berat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $kopi['harga']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kadaluarsa" class="col-sm-2 col-form-label">Kadaluarsa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kadaluarsa" name="kadaluarsa" value="<?= $kopi['kadaluarsa']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur_simpan" class="col-sm-2 col-form-label">Umur Simpan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="umur_simpan" name="umur_simpan" value="<?= $kopi['umur_simpan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>