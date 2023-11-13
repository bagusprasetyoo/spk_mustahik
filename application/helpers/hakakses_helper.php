<?php
/* Helper berfungsi untuk membantu pengembang membangun aplikasi secara lebih cepat dan efisien. 
Setiap helper bisa terdiri dari beberapa fungsi, dimana setiap fungsi dari helper melakukan satu 
pekerjaan yang spesifik tanpa ada ketergantungan terhadap fungsi yang lain.
Helper biasanya disimpan dalam folder system/helpers, atau di dalam folder system/application/helpers. 
CodeIgniter akan terlebih dulu mencari helper di dalam folder system/application/helpers, jika helper 
yang dicari tidak ditemukan pada folder tersebut, baru kemudian dicari pada folder system/helpers. */
// sumber : https://idcloudhost.com/panduan/mengenal-library-helper-dan-mempercantik-url-codeigniter/


//jika sudah login maka tidak dapat kembali ke form login
function already_login()
{
    $ci = &get_instance();
    $status_login = $ci->session->userdata('login');
    if ($status_login) {
        redirect('dashboard');
    }
}

//helper untuk mengecek apakah belum melakukan login
function must_login()
{
    $ci = &get_instance();
    $status_login = $ci->session->userdata('login');
    if (!$status_login) {
        redirect('auth/login');
    }
}

//hanya admin yang bisa mengelola
function only_admin()
{
    $ci = &get_instance();
    $level = $ci->session->userdata('level');
    if ($level != 'Admin') {
        redirect('dashboard');
    }
}

//hanya petugas yang bisa mengelola
function only_petugas()
{
    $ci = &get_instance();
    $level = $ci->session->userdata('level');
    if ($level != 'Petugas') {
        redirect('dashboard');
    }
}

//helper untuk userdata level sehingga penulisan lebih singkat
function lvl_admin()
{
    $ci = &get_instance();
    return $ci->session->userdata('level') == 'Admin';
}
function lvl_petugas()
{
    $ci = &get_instance();
    return $ci->session->userdata('level') == 'Petugas';
}

/*  helper untuk membantu memperpendek pemanggilan userdata 
before : $this->session->userdata('nama')
after  : userdata('nama')*/
function userdata($param)
{
    $ci = &get_instance();
    return $ci->session->userdata($param);
}
