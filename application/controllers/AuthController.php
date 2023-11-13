<?php

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model
        $this->load->model('penggunamodel');
    }

    public function login()
    {
        already_login();
        // rules form validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'Username harus diisi !',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi !',
        ]);

        //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        // percabangan mengecek validasi dari form 
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            // mengambil hasil inputan
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            // mengambil data pengguna berdasarkan username
            $pengguna = $this->penggunamodel->get($username)->row();

            // percabangan apabila isi baris lebih dari 0 atau ada isinya
            if ($pengguna) {
                // mengambil sebaris isi dari record
                // $data_login = $pengguna->row();
                // password_verify adalah metode untuk mencocokkan password yang di hash
                if (password_verify($password, $pengguna->password)) {
                    $this->set_userdata($pengguna); // masuk ke dalam method check_status_login()
                } else {
                    //pesan jika password salah atau tidak sesuai
                    $this->session->set_flashdata('danger', 'Password salah!');
                    redirect('authcontroller/login');
                }
            } else {
                //pesan jika username tidak ditemukan
                $this->session->set_flashdata('warning', 'Username tidak ditemukan!');
                redirect('authcontroller/login');
            }
        }
    }

    private function set_userdata($pengguna)
    {
        // menetapkan data user yang login ke dalam session
        $set_userdata = [
            'login' => TRUE,
            'username' => $pengguna->username,
            'nama' => $pengguna->nama_pengguna,
            'level' => $pengguna->level,
            'create_at' => $pengguna->created_at,
            'foto' => $pengguna->foto_profil,
        ];
        $this->session->set_userdata($set_userdata);
        $this->session->set_flashdata('success', 'Hai ' . $pengguna->nama_pengguna . ', Selamat Datang Di SPK Mustahik');
        redirect('dashboard');
    }

    // method LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
