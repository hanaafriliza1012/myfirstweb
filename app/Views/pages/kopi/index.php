<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Kopi</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
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

<?= $this->endSection('content'); ?>