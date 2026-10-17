<?= $this->extend('layout/index') ?>
<?php
use CodeIgniter\Shield\Entities\User;
?>

<?= $this->section('title') ?><?= lang('Auth.email2FATitle') ?> <?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="min-vh-100 py-5 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <div class="text-center mb-4">
                        <h1 class="display-6 mb-2">Autentikasi 2 Faktor</h1>
                        <p class="text-muted m-0">Konfirmasi alamat email anda</p>
                    </div>
                </div>
            </div>
            <?php if (session('error') !== null) : ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                        <div class="alert alert-danger alert-dismissible fade show rounded-4 d-flex align-items-center gap-2 p-3">
                            <p class="m-0"><?= session('error') ?></p>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>   
                </div>
            <?php endif ?>
            <form class="row flex-column align-items-center" action="<?= url_to('auth-action-handle') ?>" method="post">
                <?= csrf_field() ?>
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <div class="form-floating mb-2 font-sans">
                        <input 
                            type="email" 
                            name="email"
                            inputmode="email" 
                            autocomplete="email" 
                            placeholder="<?= lang('Auth.email') ?>"
                            <?php /** @var User $user */ ?>
                            value="<?= old('email', $user->email) ?>" 
                            required 
                            class="form-control rounded-4"
                            id="email"
                        >
                        <label for="email">Alamat Email</label>
                    </div>
                </div>
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn rounded-4 btn-dark border w-100 mb-3 font-sans">
                        Kirim Kode Verifikasi
                    </button>
                </div>
            </form>
        </div>
    </section>
<?= $this->endSection() ?>