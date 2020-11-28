<?= $this->extend('Web/layouts/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <form action="/WebController/aksi_login" method="POST">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password1">Password</label>
                                        <input type="password" class="form-control" id="password1" name="password1">
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">Repeat Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/WebController/index'); ?>">Already have an account? Login!</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>