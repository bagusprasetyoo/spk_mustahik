<?php

class MustahikModel extends CI_Model
{
    public function get()
    {
        $this->db->from('tb_mustahik');
        $this->db->join('tb_desa', 'tb_desa.id_desa = tb_mustahik.id_desa');
        $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_mustahik.id_kecamatan');
        $this->db->order_by('tgl_regis', 'DESC');
        return $this->db->get();
    }

    public function insert($post)
    {
        $data = [
            'tgl_regis' => date('d/m/Y'),
            'prov_kab' => 'Kalimantan Selatan/Tanah Laut',
            'id_kecamatan' => $post['id_kecamatan'],
            'id_desa' => $post['id_desa'],
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
            'halaman_rumah' => html_entity_decode($post['halaman_rumah']),
            'ukuran_rumah' => html_entity_decode($post['ukuran_rumah']),
            'dinding' => $post['dinding'],
            'lantai' => $post['lantai'],
            'atap' => $post['atap'],
            'ruang_tamu' => $post['ruang_tamu'],
            'alat_dapur' => $post['alat_dapur'],
            'mck' => $post['mck'],
            'sumber_air' => $post['sumber_air'],
            'daya_listrik' => html_entity_decode($post['daya_listrik']),
            'sawah' => $post['sawah'],
            'luas_sawah' => $post['luas_sawah'],
            'kepemilikan_kendaraan' => $post['kepemilikan_kendaraan'],
            'jenis_kendaraan' => $post['jenis_kendaraan'],
            'ternak' => $post['ternak'],
            'jenis_ternak' => $post['jenis_ternak'],
            'elektronik' => $post['elektronik'],
            'keluarga_beribadah' => isset($post['keluarga_beribadah']) ? $post['keluarga_beribadah'] : '',
            'keluarga_jumlah_makan' => isset($post['keluarga_jumlah_makan']) ? $post['keluarga_jumlah_makan'] : '',
            'pakaian_layak' => isset($post['pakaian_layak']) ? $post['pakaian_layak'] : '',
            'sarana_kesehatan' => isset($post['sarana_kesehatan']) ? $post['sarana_kesehatan'] : '',
            'siap_kerja' => isset($post['siap_kerja']) ? $post['siap_kerja'] : '',
            'shalat' => isset($post['shalat']) ? $post['shalat'] : '',
            'puasa' => isset($post['puasa']) ? $post['puasa'] : '',
            'zakat' => isset($post['zakat']) ? $post['zakat'] : '',
            'lingkungan_keluarga' => isset($post['lingkungan_keluarga']) ? $post['lingkungan_keluarga'] : '',
            'kebijakan_pemerintah' => isset($post['kebijakan_pemerintah']) ? $post['kebijakan_pemerintah'] : '',
            'indeks_rumah' => isset($post['indeks_rumah']) ? $post['indeks_rumah'] : '',
            'kepemilikan_harta' => isset($post['kepemilikan_harta']) ? $post['kepemilikan_harta'] : '',
            'pendapatan' => isset($post['pendapatan']) ? $post['pendapatan'] : '',
            'indeks_kepribadian' => isset($post['indeks_kepribadian']) ? $post['indeks_kepribadian'] : '',
            'rekomendasi_petugas' => isset($post['rekomendasi_petugas']) ? $post['rekomendasi_petugas'] : '',
            'ket' => $post['ket'],
        ];

        return $this->db->insert('tb_mustahik', $data);
    }

    public function update($post, $id)
    {
        $data = [
            'id_kecamatan' => $post['id_kecamatan'],
            'id_desa' => $post['id_desa'] ?  $post['id_desa'] :  $post['id_desa_awal'],
            'nama' => $post['nama'],
            'nama_kk' => $post['nama_kk'],
            'alamat' => $post['alamat'],
            'no_hp' => $post['no_hp'],
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
            'halaman_rumah' => html_entity_decode($post['halaman_rumah']),
            'ukuran_rumah' => html_entity_decode($post['ukuran_rumah']),
            'dinding' => $post['dinding'],
            'lantai' => $post['lantai'],
            'atap' => $post['atap'],
            'ruang_tamu' => $post['ruang_tamu'],
            'alat_dapur' => $post['alat_dapur'],
            'mck' => $post['mck'],
            'sumber_air' => $post['sumber_air'],
            'daya_listrik' => html_entity_decode($post['daya_listrik']),
            'sawah' => $post['sawah'],
            'luas_sawah' => $post['luas_sawah'],
            'kepemilikan_kendaraan' => $post['kepemilikan_kendaraan'],
            'jenis_kendaraan' => $post['jenis_kendaraan'],
            'ternak' => $post['ternak'],
            'jenis_ternak' => $post['jenis_ternak'],
            'elektronik' => $post['elektronik'],
            'keluarga_beribadah' => isset($post['keluarga_beribadah']) ? $post['keluarga_beribadah'] : '',
            'keluarga_jumlah_makan' => isset($post['keluarga_jumlah_makan']) ? $post['keluarga_jumlah_makan'] : '',
            'pakaian_layak' => isset($post['pakaian_layak']) ? $post['pakaian_layak'] : '',
            'sarana_kesehatan' => isset($post['sarana_kesehatan']) ? $post['sarana_kesehatan'] : '',
            'siap_kerja' => isset($post['siap_kerja']) ? $post['siap_kerja'] : '',
            'shalat' => isset($post['shalat']) ? $post['shalat'] : '',
            'puasa' => isset($post['puasa']) ? $post['puasa'] : '',
            'zakat' => isset($post['zakat']) ? $post['zakat'] : '',
            'lingkungan_keluarga' => isset($post['lingkungan_keluarga']) ? $post['lingkungan_keluarga'] : '',
            'kebijakan_pemerintah' => isset($post['kebijakan_pemerintah']) ? $post['kebijakan_pemerintah'] : '',
            'indeks_rumah' => isset($post['indeks_rumah']) ? $post['indeks_rumah'] : '',
            'kepemilikan_harta' => isset($post['kepemilikan_harta']) ? $post['kepemilikan_harta'] : '',
            'pendapatan' => isset($post['pendapatan']) ? $post['pendapatan'] : '',
            'indeks_kepribadian' => isset($post['indeks_kepribadian']) ? $post['indeks_kepribadian'] : '',
            'rekomendasi_petugas' => isset($post['rekomendasi_petugas']) ? $post['rekomendasi_petugas'] : '',
            'ket' => $post['ket'],
        ];
        $this->db->where('id',  $id);
        return $this->db->update('tb_mustahik', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tb_mustahik');
    }

    public function check_nik($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('tb_mustahik');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
