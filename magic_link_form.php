<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.useMagicLink') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 d-flex flex-column justify-content-sm-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2 text-center">
                    <h1 class="display-6">Gunakan Login Link</h1>
                    <p class="text-muted">Masuk dengan cepat melalui tautan yang dikirim ke email Anda.</p>
                </div>
            </div>
            <?php if (session('error') !== null) : ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                        <div class="alert alert-danger alert-dismissible fade show mb-2 rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
                            <p class="m-0"><?= session('error') ?></p>
                            <button type="button" class="btn btn-sm btn-icon btn-danger ms-auto me-0 rounded-2" data-bs-dismiss="alert" aria-label="Close">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            <?php elseif (session('errors') !== null) : ?>
                <?php if (is_array(session('errors'))) : ?>
                    <?php foreach (session('errors') as $error) : ?>
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                                <div class="alert alert-danger alert-dismissible fade show mb-2 rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
                                    <p class="m-0"><?= $error ?></p>
                                    <button type="button" class="btn btn-sm btn-icon btn-danger ms-auto me-0 rounded-2" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                        <?php else : ?>
                            <div class="row justify-content-center">
                                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                                    <div class="alert alert-danger alert-dismissible fade show mb-2 rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
                                        <p class="m-0"><?= session('error') ?></p>
                                        <button type="button" class="btn btn-sm btn-icon btn-danger ms-auto me-0 rounded-2" data-bs-dismiss="alert" aria-label="Close">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                <?php endif ?>
            <?php endif ?>
        </div>
        <form class="container font-sans" action="<?= url_to('magic-link') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-3">
                        <input type="email"  class="form-control rounded-4" id="floatingEmailInput" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email', auth()->user()->email ?? null) ?>" required >
                        <label for="email"><?= lang('Auth.email') ?></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn btn-dark rounded-4 w-100 mb-3">
                        Kirim Link Login
                    </button>
                    <a href="<?= url_to('login') ?>" class="link-dark">
                        Kembali ke Halaman Login
                    </a>
                </div>
            </div>
        </form>
    </section>
<?= $this->endSection() ?>