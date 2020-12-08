<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="kopi">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/KopiController/create" class="btn btn-primary mt-3"> Tambah Data</a>
                <h1 class="text-white">Daftar Kopi</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">No.</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <?php $i = 1; ?>
                        <?php foreach ($kopi as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/img/<?= $k['gambar']; ?>" alt="" width="70"></td>
                                <td><?= $k['jenis']; ?></td>
                                <td><a href="/kopi/<?= $k['slug']; ?>" class="btn btn-outline-success my-2 my-sm-0">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>