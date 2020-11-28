<?= $this->extend('Web/user/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/hana.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Penulis</h5>
                        <p class="card-text">Hallo, saya Hana Afriliza</p>
                        <p class="card-text">Mahasiswa jurusan ilmu komputer yang sedang menempuh semester 5</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>