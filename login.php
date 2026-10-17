<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?><?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?php
$googleEnabled = config("ShieldOAuthConfig")->oauthConfigs['google']['allow_login'];
$githubEnabled = config("ShieldOAuthConfig")->oauthConfigs['github']['allow_login'];
$yahooEnabled = config("ShieldOAuthConfig")->oauthConfigs['yahoo']['allow_login'];
?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 d-flex flex-column justify-content-sm-center">

        <div class="container">
            
            <div class="row justify-content-center mb-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <h1 class="display-6 mx-2">Selamat Datang Kembali</h1>
                    <p class="text-muted mx-3">Masukkan detail akun anda</p>
                </div>
            </div>

            <?php if (session('error') !== null) : ?>
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
            <?php elseif (session('errors') !== null) : ?>
                <?php if (is_array(session('errors'))) : ?>
                    <?php foreach (session('errors') as $error) : ?>
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                                <div class="alert alert-danger alert-dismissible fade show rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
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
                            <div class="alert alert-danger alert-dismissible fade show rounded-4 d-flex align-items-center gap-2 p-3" role="alert">
                                <p class="m-0"><?= session('errors') ?></p>
                                <button type="button" class="btn btn-sm btn-icon btn-danger ms-auto me-0 rounded-2" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>

            <?php if (session('message') !== null) : ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 mb-2">
                        <div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
                            <?= session('message') ?>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if($googleEnabled) : ?>
            <div class="row justify-content-center mb-2">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <a href="<?= base_url('oauth/google') ?>" class="btn btn-light w-100 font-sans rounded-4">
                        <span class="me-3">
                            <svg height="1.5rem" width="1.5rem" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><path d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16" fill="#00ac47"/><path d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16" fill="#4285f4"/><path d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z" fill="#ffba00"/><polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374"/><path d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z" fill="#ea4435"/><polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626"/><path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4"/></svg>
                        </span>
                        Log In dengan Google
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <?php if($githubEnabled) : ?>
            <div class="row justify-content-center mb-2">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <a href="<?= base_url('oauth/github') ?>" class="btn btn-light w-100 font-sans rounded-4">
                        <i class="bi bi-github me-3 fs-5"></i>
                        Log In dengan Github
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <?php if($yahooEnabled) : ?>
            <div class="row justify-content-center mb-2">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                    <a href="<?= base_url('oauth/yahoo') ?>" class="btn btn-light w-100 font-sans rounded-4">
                        <span class="me-3">
                            <svg height="1.5rem" width="1.5rem" viewBox="0 0 512 512" data-name="Layer 1" id="Layer_2" xmlns="http://www.w3.org/2000/svg">
                                <path style="fill:#7F40BD;" d="M504.783,77.091h-0.006H303.494c-2.036,0-3.977,0.859-5.345,2.366
                                    c-1.368,1.508-2.038,3.52-1.842,5.549l3.925,40.693c0.343,3.552,3.228,6.32,6.792,6.516l42.05,2.314l-80.736,112.023L180.293,71.142
                                    l63.563-2.43c3.844-0.146,6.896-3.276,6.945-7.121l0.464-36.392c0.022-1.932-0.726-3.792-2.082-5.166
                                    c-1.356-1.372-3.206-2.147-5.137-2.147H7.22c-3.989,0-7.22,3.231-7.22,7.221v40.558c0,3.947,3.17,7.163,7.115,7.22l66.917,0.964
                                    l127.257,224.488l-0.568,140.205l-88.48,3.631c-3.817,0.155-6.85,3.259-6.923,7.077l-0.716,37.506
                                    c-0.037,1.939,0.709,3.81,2.069,5.196c1.356,1.383,3.212,2.161,5.151,2.161h276.762c1.981,0,3.875-0.813,5.239-2.249
                                    c1.363-1.435,2.078-3.368,1.974-5.346l-1.933-37.132c-0.192-3.692-3.14-6.641-6.835-6.834l-76.124-3.992l-11.082-136.57
                                    L436.479,137.33l55.64-2.53c3.063-0.142,5.704-2.202,6.587-5.139l12.909-43.018c0.248-0.729,0.385-1.516,0.385-2.332
                                    C512,80.325,508.772,77.091,504.783,77.091z"
                                />
                            </svg>
                        </span>
                        Log In dengan Yahoo
                    </a>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <form class="container font-sans" action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <div class="row justify-content-center">
                <?php if($googleEnabled) : ?>
                    <div class="col-11 text-center mb-2">
                        <span class="badge bg-transparent text-muted p-0 border-0 text-uppercase fw-normal">atau</span>
                    </div>
                <?php endif; ?>
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-sm-center">
                    <div class="form-floating mb-2">
                        <input type="email" name="email" inputmode="email" autocomplete="email" class="form-control rounded-4" id="email" value="<?= old('email') ?>" required placeholder="<?= lang('Auth.email') ?>" >
                        <label for="email">Alamat Email</label>
                    </div>
                    <div class="form-floating mb-2 position-relative input-password">
                        <input type="password" class="form-control rounded-4" id="password" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required >
                        <label for="password">Kata Sandi</label>
                        <button
                            type="button"
                            class="position-absolute top-50 end-0 translate-middle-y me-2 border-0 btn btn-light btn-password btn-icon rounded-3"
                            tabindex="-1"
                        >
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center d-flex gap-1 justify-content-between">
                    <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                        <div class="form-check">
                            <input class="form-check-input shadow-none border text-body" type="checkbox" name="remember" <?php if (old('remember')): ?> checked <?php endif ?>>
                            <label class="form-check-label text-nowrap" for="flexCheckDefault">
                                Ingat Saya?
                            </label>
                        </div>
                    <?php endif; ?>
                    <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                        <a  href="<?= url_to('magic-link') ?>" class="text-body text-nowrap">Lupa Password?</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <button type="submit" class="btn rounded-4 btn-dark border w-100 mb-3">
                        Log in
                    </button>
                    <?php if (setting('Auth.allowRegistration')) : ?>
                        <a href="<?= url_to('register') ?>" class="text-body">
                            Butuh akun baru?
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </form>
    </section>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
    document.querySelectorAll(".input-password").forEach((wrapper) => {
        const input = wrapper.querySelector("input[type='password']");
        const button = wrapper.querySelector(".btn-password");
        const icon = button.querySelector("i");

        let showPassword = false;

        button.addEventListener("click", () => {
            showPassword = !showPassword;

            input.type = showPassword ? "text" : "password";

            icon.classList.toggle("bi-eye");
            icon.classList.toggle("bi-eye-slash");
        });
    });
</script>
<?= $this->endSection() ?>