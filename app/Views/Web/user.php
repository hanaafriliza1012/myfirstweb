<?= $this->extend('Web/user/index'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <h3> Selamat datang </h3>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Strawberry</td>
                        <td>
                            <a>
                                <img class="img-profile rounded-circle" src="/img/strawberry.jpg" width="100">
                            </a>
                        </td>
                        <td>
                            <a href="<?= base_url('/WebController/detail'); ?>" class="btn btn-outline-success my-2 my-sm-0">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jeruk</td>
                        <td>
                            <a>
                                <img class="img-profile rounded-circle" src="/img/jeruk.jpg" width="100">
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-success my-2 my-sm-0">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Apel</td>
                        <td>
                            <a>
                                <img class="img-profile rounded-circle" src="/img/apel.jpg" width="100">
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-success my-2 my-sm-0">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>