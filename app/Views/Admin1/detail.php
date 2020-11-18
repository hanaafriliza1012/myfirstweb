<?= $this->extend('Admin/layouts/app'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $mahasiswa['foto']; ?>" class="card-img mt-3 ml-1" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                            <p class="card-text mt-5"><b>Npm: </b><?= $mahasiswa['npm']; ?></p>
                            <p class="card-text"><b>Email: </b><?= $mahasiswa['email']; ?></p>
                            <p class="card-text"><b>Jurusan: </b><?= $mahasiswa['jurusan']; ?></p>
                            <a href="/admin/edit/<?= $mahasiswa['id']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/Admin/<?= $mahasiswa['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');">Delete</button>
                            </form>
                            <br><br>
                            <a href="/Admin" class="">Kembali ke daftar mahasiswa</a>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>