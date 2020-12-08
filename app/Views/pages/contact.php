<?= $this->extend('pages/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Contact Us</h1>
            <div class="col-md-6">
                <div class="card text-dark bg-light mb-3 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">Universitas Lampung</p>
                    </div>
                </div>
                <ul class="list-group text-center">
                    <li class=" list-group-item">
                        <h4>Anggota Kelompok</h4>

                    </li>
                    <li class="list-group-item">M. Umaruddin Syam</li>
                    <li class="list-group-item">Hana Afriliza</li>
                    <li class="list-group-item">Nia Nur Atika</li>
                </ul>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>