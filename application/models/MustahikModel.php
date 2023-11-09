<?php

class MustahikModel extends CI_Model
{
    public function get()
    {
        $this->db->from('tb_mustahik');
        $this->db->join('tb_desa', 'tb_desa.id_desa = tb_mustahik.id_desa');
        $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_mustahik.id_kecamatan');
        return $this->db->get();
    }

    public function insert($post)
    {
        $data = [
            'tgl_regis' => $post['tgl_regis'],
            'prov_kab' => $post['prov_kab'],
            'kec' => $post['kec'],
            'ds_kel' => $post['ds_kel'],
            'nama' => $post['nama'],
            'nama_kk' => $post['nama_kk'],
            'alamat' => $post['alamat'],
            'no_hp' => $post['no_hp'],
            'nik' => $post['nik'],
            'no_kk' => $post['no_kk'],
            'jumlah_keluarga' => $post['jumlah_keluarga'],
            'bantuan' => $post['bantuan'],
            'besar_bantuan' => $post['besar_bantuan'],
            'jenis_ashnaf' => $post['jenis_ashnaf'],
            'program_bantuan' => $post['program_bantuan'],
            'sumber_dana' => $post['sumber_dana'],
            'pekerjaan' => $post['pekerjaan'],
            'status_pekerjaan_suami' => $post['status_pekerjaan_suami'],
            'status_pekerjaan_istri' => $post['status_pekerjaan_istri'],
            'total_pendapatan' => $post['total_pendapatan'],
            'simpanan' => $post['simpanan'],
            'jenis_simpanan' => $post['jenis_simpanan'],
            'hutang' => $post['hutang'],
            'total_pengeluaran' => $post['total_pengeluaran'],
            'halaman_rumah' => $post['halaman_rumah'],
            'ukuran_rumah' => $post['ukuran_rumah'],
            'dinding' => $post['dinding'],
            'lantai' => $post['lantai'],
            'atap' => $post['atap'],
            'ruang_tamu' => $post['ruang_tamu'],
            'alat_dapur' => $post['alat_dapur'],
            'mck' => $post['mck'],
            'sumber_air' => $post['sumber_air'],
            'daya_listrik' => $post['daya_listrik'],
            'sawah' => $post['sawah'],
            'luas_sawah' => $post['luas_sawah'],
            'kepemilikan_kendaraan' => $post['kepemilikan_kendaraan'],
            'jenis_kendaraan' => $post['jenis_kendaraan'],
            'ternak' => $post['ternak'],
            'jenis_ternak' => $post['jenis_ternak'],
            'elektronik' => $post['elektronik'],
            'keluarga_beribadah' => $post['keluarga_beribadah'],
            'keluarga_jumlah_makan' => $post['keluarga_jumlah_makan'],
            'pakaian_layak' => $post['pakaian_layak'],
            'sarana_kesehatan' => $post['sarana_kesehatan'],
            'siap_kerja' => $post['siap_kerja'],
            'shalat' => $post['shalat'],
            'puasa' => $post['puasa'],
            'zakat' => $post['zakat'],
            'lingkungan_keluarga' => $post['lingkungan_keluarga'],
            'kebijakan_pemerintah' => $post['kebijakan_pemerintah'],
            'indeks_rumah' => $post['indeks_rumah'],
            'kepemilikan_harta' => $post['kepemilikan_harta'],
            'pendapatan' => $post['pendapatan'],
            'indeks_kepribadian' => $post['indeks_kepribadian'],
            'rekomendasi_petugas' => $post['rekomendasi_petugas'],
            'ket' => $post['ket'],
        ];

        return $this->db->insert('tb_mustahik', $data);
    }
}
