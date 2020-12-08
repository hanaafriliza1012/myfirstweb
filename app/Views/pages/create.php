<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Kopi</h2>
            <form action="/KopiController/save" method="post">
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gambar" name="gambar" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis" name="jenis" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="berat" name="berat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kadaluarsa" class="col-sm-2 col-form-label">Kadaluarsa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kadaluarsa" name="kadaluarsa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur_simpan" class="col-sm-2 col-form-label">Umur Simpan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="umur_simpan" name="umur_simpan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>