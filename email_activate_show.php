<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.emailActivateTitle') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 d-flex align-items-center">
        <div class="container text-center">
            <div class="row justify-content-center mb-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <h1 class="display-6 mx-2">Aktivasi Email</h1>
                    <p class="text-muted mx-3">Kami baru saja mengirimkan email kepada Anda berisi kode untuk mengonfirmasi alamat email Anda. Salin kode tersebut dan tempelkan di bawah ini.Masukkan detail akun anda</p>
                </div>
            </div>
            <?php if (session('error')) : ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                        <div class="alert alert-danger alert-dismissible fade show rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
                            <p class="m-0"><?= session('error') ?></p>
                            <button type="button" class="btn btn-sm btn-icon btn-danger ms-auto me-0 rounded-2" data-bs-dismiss="alert" aria-label="Close">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <form class="row justify-content-center align-items-center flex-column" action="<?= url_to('auth-action-verify') ?>" method="post">
                <?= csrf_field() ?>
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <div class="form-floating mb-2 font-sans">
                        <input type="text" class="form-control rounded-4" id="floatingTokenInput" name="token" placeholder="000000" inputmode="numeric" pattern="[0-9]*" autocomplete="one-time-code" value="<?= old('token') ?>" required class="form-control rounded-4" id="email" value="<?= old('email') ?>" required placeholder="<?= lang('Auth.email') ?>" >
                        <label for="floatingTokenInput">Token</label>
                    </div>
                </div>
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn rounded-4 btn-dark border w-100 mb-3 font-sans">
                        Verifikasi Token
                    </button>
                </div>
            </form>
        </div>
    </section>
<?= $this->endSection() ?>