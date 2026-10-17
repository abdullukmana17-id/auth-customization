<?= $this->extend('layout/index') ?>

<?= $this->section('title') ?>Gunakan Tautan Login<?= $this->endSection() ?>

<?= $this->section('head') ?>
<?= $this->include('assets/css/index') ?>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
    <section class="py-5 min-vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-9 col-md-7 col-lg-5 col-xl-4 text-center">
                    <h1 class="display-6 mb-2">Gunakan Tautan Login</h1>
                    <p class="text-muted">Periksa email Anda!</p>
                    <p class="text-muted">Kami baru saja mengirimkan email yang berisi tautan untuk login. Tautan tersebut hanya berlaku selama 60 menit.</p>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>