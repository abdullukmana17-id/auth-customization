# Kustomisasi Tampilan Proses Autentikasi
Kustomisasi tampilan autentikasi untuk proyek CodeIgniter 4 menggunakan CodeIgniter Shield dengan integrasi OAuth. Memerlukan proyek CI4 yang sudah terpasang dan dikonfigurasi dengan CodeIgniter Shield.

### 1. Menambahkan Tampilan UI Autentikasi

- Unduh file tampilan autentikasi dari repositori.
- Pindahkan seluruh file tampilan autentikasi ke direktori `app/Views/` pada proyek CodeIgniter 4 Anda.

```bash
app/
└── Views/
    ├── assets
    ├── layout
    ├── login.php
    ├── register.php
    ├── email_2fa_show.php
    ├── email_2fa_verify.php
    ├── email_activate_show.php
    ├── magic_link_form.php
    ├── magic_link_message.php
    └── ...
```

### 2. Konfigurasi Tampilan Autentikasi
Edit file app/Config/Auth.php pada properti $views agar sesuai dengan tampilan UI yang Anda tambahkan:

```bash
public array $views = [
    'login'                       => '\App\Views\login',
    'register'                    => '\App\Views\register',
    'layout'                      => '\CodeIgniter\Shield\Views\layout',
    'action_email_2fa'            => '\App\Views\email_2fa_show',
    'action_email_2fa_verify'     => '\App\Views\email_2fa_verify',
    'action_email_2fa_email'      => '\CodeIgniter\Shield\Views\Email\email_2fa_email',
    'action_email_activate_show'  => '\App\Views\email_activate_show',
    'action_email_activate_email' => '\CodeIgniter\Shield\Views\Email\email_activate_email',
    'magic-link-login'            => '\App\Views\magic_link_form',
    'magic-link-message'          => '\App\Views\magic_link_message',
    'magic-link-email'            => '\CodeIgniter\Shield\Views\Email\magic_link_email',
];
```
