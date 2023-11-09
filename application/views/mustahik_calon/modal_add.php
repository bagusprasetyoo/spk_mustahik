<!-- Modal -->
<form class="add_calon_mustahik" action="<?= base_url('mustahikcontroller/add_calon_mustahik') ?>" method="POST">
    <div class="modal fade" id="add_calon_mustahik" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Calon Mustahik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <h5>DATA WILAYAH</h5>

                        <div class="col-12 ">
                            <div class="mb-2 row">
                                <label for="id_kecamatan" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                                <div class="col-md-9">
                                    <select id="id_kecamatan" name="id_kecamatan" class="form-select">
                                        <option value="">-Pilih Kecamatan-</option>
                                        <?php foreach ($all_kecamatan as $dt_kec) { ?>
                                            <option value="<?= $dt_kec->id_kecamatan; ?>" <?= set_value('id_kecamatan') == $dt_kec->id_kecamatan ? "selected" : null; ?>>
                                                <?= $dt_kec->nama_kecamatan; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- <label for="id_kecamatan" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="id_kecamatan" name="id_kecamatan" placeholder="pilih" />
                                </div> -->
                            </div>
                            <div class="mb-2 row">
                                <label for="id_desa" class="col-md-3 col-form-label">Pilih Desa</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="id_desa" name="id_desa" placeholder="pilih" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <h5>IDENTITAS MUSTAHIK</h5>
                        <div class="col-12 ">
                            <div class="mb-2 row">
                                <label for="no_kk" class="col-md-3 col-form-label">No. KK</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="no_kk" name="no_kk" placeholder="Masukkan nomor kartu keluarga" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="nik" class="col-md-3 col-form-label">NIK</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="nik" name="nik" placeholder="Masukkan Nomor Induk Kependudukan" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="nama_kk" class="col-md-3 col-form-label">Nama Kepala Keluarga</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="nama_kk" name="nama_kk" placeholder="Masukkan nama kepala keluarga" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Jl. xx No. xx RT. xx RW. xx"></textarea>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="no_hp" class="col-md-3 col-form-label">No HP</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="no_hp" name="no_hp" placeholder="628xxxxxxxxxx" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="jumlah_keluarga" class="col-md-3 col-form-label">Jumlah Keluarga</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Masukkan jumlah keluarga" />
                                    <div class="form-text">
                                        Isi 0 jika kosong.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="bantuan" class="col-md-3 col-form-label">Bantuan ke</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" id="bantuan" name="bantuan" placeholder="Bantuan ke" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="besar_bantuan" class="col-md-3 col-form-label">Besar Bantuan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" id="besar_bantuan" name="besar_bantuan" placeholder="Masukan besar jumlah bantuan yang akan didapat" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="jenis_ashnaf" class="col-md-3 col-form-label">Jenis Ashnaf</label>
                                <div class="col-md-9">
                                    <select id="jenis_ashnaf" name="jenis_ashnaf" class="form-select">
                                        <option value="">-Pilih jenis ashnaf-</option>
                                        <option value="Fakir">Fakir</option>
                                        <option value="Miskin">Miskin</option>
                                        <option value="Muallaf">Muallaf</option>
                                        <option value="Fii Sabilillah">Fi sabilillah</option>
                                        <option value="Ibnu Sabil">Ibnu Sabil</option>
                                        <option value="Gharimi">Gharimi</option>
                                        <option value="Riqab">Riqab</option>
                                        <option value="Amil">Amil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="program_bantuan" class="col-md-3 col-form-label">Program Bantuan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="program_bantuan" name="program_bantuan" placeholder="Pilih jenis program bantuan" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="sumbar_dana" class="col-md-3 col-form-label">Sumber Dana</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="sumbar_dana" name="sumbar_dana" placeholder="Pilih sumber dana" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="pekerjaan" class="col-md-3 col-form-label">Pekerjaan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan data pekerjaan mustahik" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <h5>KEUANGAN KELUARGA</h5>
                        <div class="col-12 ">
                            <div class="mb-2 row">
                                <label for="status_pekerjaan_suami" class="col-md-3 col-form-label">Status Pekerjaan Suami</label>
                                <div class="col-md-9">
                                    <select id="status_pekerjaan_suami" name="status_pekerjaan_suami" class="form-select">
                                        <option value="">-Pilih status pekerjaan suami-</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="status_pekerjaan_istri" class="col-md-3 col-form-label">Status Pekerjaan Istri</label>
                                <div class="col-md-9">
                                    <select id="status_pekerjaan_istri" name="status_pekerjaan_istri" class="form-select">
                                        <option value="">-Pilih status pekerjaan istri-</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="total_pendapatan" class="col-md-3 col-form-label">Total Pendapatan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="total_pendapatan" name="total_pendapatan" placeholder="Masukan seluruh total pendapatan sebulan" />
                                    <div class="form-text">Pendapatan yang didapat oleh satu keluarga mustahik dalam sebulan</div>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="simpanan" class="col-md-3 col-form-label">Simpanan</label>
                                <div class="col-md-9">
                                    <select id="simpanan" name="simpanan" class="form-select">
                                        <option value="">-Simpanan-</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="jenis_simpanan" class="col-md-3 col-form-label">Jenis Simpanan</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="jenis_simpanan" name="jenis_simpanan" placeholder="Masukkan jenis simpanan yang dimiliki" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="total_pengeluaran" class="col-md-3 col-form-label">Total Pengeluaran</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="total_pengeluaran" name="total_pengeluaran" placeholder="Masukan seluruh total pengeluaran sebulan" />
                                    <div class="form-text">Pengeluaran yang dikeluarkan oleh satu keluarga mustahik dalam sebulan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <h5>PARAMETER</h5>
                        <div class="col-12">
                            <div class="mb-2 row">
                                <label for="halaman_rumah" class="col-md-3 col-form-label">Luas halaman rumah</label>
                                <div class="col-md-9">
                                    <select id="halaman_rumah" name="halaman_rumah" class="form-select">
                                        <option value="">-Pilih luas per meter persegi-</option>
                                        <option value="< 5m2">
                                            < 5m2</option>
                                        <option value="5-7 m2">5-7 m2</option>
                                        <option value="7-9 m2">7-9 m2</option>
                                        <option value="> 9 m2">
                                            > 9 m2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="ukuran_rumah" class="col-md-3 col-form-label">Luas ukuran rumah</label>
                                <div class="col-md-9">
                                    <select id="ukuran_rumah" name="ukuran_rumah" class="form-select">
                                        <option value="">-Pilih luas per meter persegi-</option>
                                        <option value="< 4m2">
                                            < 4m2</option>
                                        <option value="4-5 m2">4-5 m2</option>
                                        <option value="6-8 m2">6-8 m2</option>
                                        <option value="> 8 m2">
                                            > 8 m2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="dinding" class="col-md-3 col-form-label">Jenis dinding rumah</label>
                                <div class="col-md-9">
                                    <select id="dinding" name="dinding" class="form-select">
                                        <option value="">-Pilih jenis dinding rumah-</option>
                                        <option value="Bambu/Triplek">Bambu/Triplek</option>
                                        <option value="Semen">Semen</option>
                                        <option value="Bata">Bata</option>
                                        <option value="Kayu">Kayu</option>
                                        <option value="Papan">Papan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="lantai" class="col-md-3 col-form-label">Jenis lantai rumah</label>
                                <div class="col-md-9">
                                    <select id="lantai" name="lantai" class="form-select">
                                        <option value="">-Pilih jenis lantai rumah-</option>
                                        <option value="Bambu/Triplek">Tanah</option>
                                        <option value="Penggung">Penggung</option>
                                        <option value="Plester">Plester</option>
                                        <option value="Kayu">Kayu</option>
                                        <option value="Papan">Papan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="atap" class="col-md-3 col-form-label">Atap</label>
                                <div class="col-md-9">
                                    <select id="atap" name="atap" class="form-select">
                                        <option value="">-Pilih jenis atap rumah-</option>
                                        <option value="Jerami">Jerami</option>
                                        <option value="Asbes/Seng">Asbes/Seng</option>
                                        <option value="Genteng">Genteng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="ruang_tamu" class="col-md-3 col-form-label">Ruang tamu</label>
                                <div class="col-md-9">
                                    <select id="ruang_tamu" name="ruang_tamu" class="form-select">
                                        <option value="">-Pilih jenis ruang tamu rumah-</option>
                                        <option value="Lesehan">Lesehan</option>
                                        <option value="Kayu">Kayu</option>
                                        <option value="Sofa">Sofa</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="alat_dapur" class="col-md-3 col-form-label">Alat dapur</label>
                                <div class="col-md-9">
                                    <select id="alat_dapur" name="alat_dapur" class="form-select">
                                        <option value="">-Pilih jenis alat dapur rumah-</option>
                                        <option value="Kompor Biasa">Kompor Biasa</option>
                                        <option value="Kompor Gas">Kompor Gas</option>
                                        <option value="Kompor Listrik">Kompor Listrik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="mck" class="col-md-3 col-form-label">Mandi Cuci Kakus (MCK)</label>
                                <div class="col-md-9">
                                    <select id="mck" name="mck" class="form-select">
                                        <option value="">-Pilih jenis mck-</option>
                                        <option value="Berbagi Pakai">Berbagi Pakai</option>
                                        <option value="Sendiri Di Dalam">Sendiri Di Dalam</option>
                                        <option value="Sendiri Di Luar">Sendiri Di Luar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="sumber_air" class="col-md-3 col-form-label">Sumber air</label>
                                <div class="col-md-9">
                                    <select id="sumber_air" name="sumber_air" class="form-select">
                                        <option value="">-Pilih jenis sumber air yang digunakan-</option>
                                        <option value="Sungai">Sungai</option>
                                        <option value="Sumur">Sumur</option>
                                        <option value="PDAM">PDAM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="daya_listrik" class="col-md-3 col-form-label">Daya listrik</label>
                                <div class="col-md-9">
                                    <select id="daya_listrik" name="daya_listrik" class="form-select">
                                        <option value="">-Pilih jenis daya listrik yang digunakan-</option>
                                        <option value="450 kwh">450 kwh</option>
                                        <option value="900 kwh">900 kwh</option>
                                        <option value="1300 kwh">1300 kwh</option>
                                        <option value="> 1300 kwh">> 1300 kwh</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <h5>KEPEMILIKAN HARTA</h5>
                        <div class="col-12">
                            <div class="mb-2 row">
                                <label for="sawah" class="col-md-3 col-form-label">Sawah</label>
                                <div class="col-md-9">
                                    <select id="sawah" name="sawah" class="form-select">
                                        <option value="">-Pilih-</option>
                                        <option value="Warisan/Hibah">Warisan/Hibah</option>
                                        <option value="Beli">Beli</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="luas_sawah" class="col-md-3 col-form-label">Luas Sawah</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="luas_sawah" name="luas_sawah" placeholder="pilih" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="kepemilikan_kendaraan" class="col-md-3 col-form-label">Kepemilikan Kendaraan</label>
                                <div class="col-md-9">
                                    <select id="kepemilikan_kendaraan" name="kepemilikan_kendaraan" class="form-select">
                                        <option value="">-Pilih-</option>
                                        <option value="Warisan/Hibah">Warisan/Hibah</option>
                                        <option value="Beli">Beli</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="jenis_kendaraan" class="col-md-3 col-form-label">Jenis Kendaraan</label>
                                <div class="col-md-9">
                                    <select id="jenis_kendaraan" name="jenis_kendaraan" class="form-select">
                                        <option value="">-Pilih-</option>
                                        <option value="Roda 2">Roda 2</option>
                                        <option value="Roda 4">Roda 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="ternak" class="col-md-3 col-form-label">Ternak</label>
                                <div class="col-md-9">
                                    <select id="ternak" name="ternak" class="form-select">
                                        <option value="">-Pilih-</option>
                                        <option value="Warisan/Hibah">Warisan/Hibah</option>
                                        <option value="Beli">Beli</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="jenis_ternak" class="col-md-3 col-form-label">Jenis Ternak</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="jenis_ternak" name="jenis_ternak" placeholder="Masukkan jenis ternak" />
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="elektronik" class="col-md-3 col-form-label">Elektronik</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="elektronik" name="elektronik" placeholder="pilih" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5>INDEKS KEPRIBADIAN</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>Anggota Keluarga melaksanakan ibadah sesuai syariat Islam</td>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keluarga_beribadah" id="keluarga_beribadah_y" value="Ya">
                                                        <label class="form-check-label" for="keluarga_beribadah_y">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keluarga_beribadah" id="keluarga_beribadah_t" value="Tidak">
                                                        <label class="form-check-label" for="keluarga_beribadah_t">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Seluruh anggota keluarga sudah dapat makan minimal dua kali sehari</td>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keluarga_jumlah_makan" id="keluarga_jumlah_makan_y" value="Ya">
                                                        <label class="form-check-label" for="keluarga_jumlah_makan_y">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="keluarga_jumlah_makan" id="keluarga_jumlah_makan_t" value="Tidak">
                                                        <label class="form-check-label" for="keluarga_jumlah_makan_t">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Seluruh anggota keluarga sudah memiliki pakaian berbeda untuk di rumah, tempat bekerja, sekolah dan bepergian</td>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pakaian_layak" id="pakaian_layak_y" value="Ya">
                                                        <label class="form-check-label" for="pakaian_layak_y">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pakaian_layak" id="pakaian_layak_t" value="Tidak">
                                                        <label class="form-check-label" for="pakaian_layak_t">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bila anak sakit, sudah dibawa ke sarana kesehatan</td>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sarana_kesehatan" id="sarana_kesehatan_y" value="Ya">
                                                        <label class="form-check-label" for="sarana_kesehatan_y">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sarana_kesehatan" id="sarana_kesehatan_t" value="Tidak">
                                                        <label class="form-check-label" for="sarana_kesehatan_t">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Siap bekerja keras dan cerdas dan melaksanakan ibadah dengan ikhlas</td>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="siap_kerja" id="siap_kerja_y" value="Ya">
                                                        <label class="form-check-label" for="siap_kerja_y">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="siap_kerja" id="siap_kerja_t" value="Tidak">
                                                        <label class="form-check-label" for="siap_kerja_t">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>EVALUASI KEGIATAN IBADAH KELUARGA MUSTAHIK</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Shalat</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shalat" id="shalat_1" value="1">
                                                        <label class="form-check-label" for="shalat_1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shalat" id="shalat_2" value="2">
                                                        <label class="form-check-label" for="shalat_2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shalat" id="shalat_3" value="3">
                                                        <label class="form-check-label" for="shalat_3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shalat" id="shalat_4" value="4">
                                                        <label class="form-check-label" for="shalat_4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="shalat" id="shalat_5" value="5">
                                                        <label class="form-check-label" for="shalat_5">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Puasa</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="puasa" id="puasa_1" value="1">
                                                        <label class="form-check-label" for="puasa_1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="puasa" id="puasa_2" value="2">
                                                        <label class="form-check-label" for="puasa_2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="puasa" id="puasa_3" value="3">
                                                        <label class="form-check-label" for="puasa_3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="puasa" id="puasa_4" value="4">
                                                        <label class="form-check-label" for="puasa_4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="puasa" id="puasa_5" value="5">
                                                        <label class="form-check-label" for="puasa_5">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Zakat & Infak</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="zakat" id="zakat_1" value="1">
                                                        <label class="form-check-label" for="zakat_1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="zakat" id="zakat_2" value="2">
                                                        <label class="form-check-label" for="zakat_2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="zakat" id="zakat_3" value="3">
                                                        <label class="form-check-label" for="zakat_3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="zakat" id="zakat_4" value="4">
                                                        <label class="form-check-label" for="zakat_4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="zakat" id="zakat_5" value="5">
                                                        <label class="form-check-label" for="zakat_5">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Lingkungan Keluarga</th>
                                        <td>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_1" value="1">
                                                        <label class="form-check-label" for="lingkungan_keluarga_1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_2" value="2">
                                                        <label class="form-check-label" for="lingkungan_keluarga_2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_3" value="3">
                                                        <label class="form-check-label" for="lingkungan_keluarga_3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_4" value="4">
                                                        <label class="form-check-label" for="lingkungan_keluarga_4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_5" value="5">
                                                        <label class="form-check-label" for="lingkungan_keluarga_5">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kebijakan Pemerintah</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_1" value="1">
                                                        <label class="form-check-label" for="kebijakan_pemerintah_1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_2" value="2">
                                                        <label class="form-check-label" for="kebijakan_pemerintah_2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_3" value="3">
                                                        <label class="form-check-label" for="kebijakan_pemerintah_3">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_4" value="4">
                                                        <label class="form-check-label" for="kebijakan_pemerintah_4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_5" value="5">
                                                        <label class="form-check-label" for="kebijakan_pemerintah_5">5</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>KELAYAKAN</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Indeks Rumah</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="indeks_rumah" id="indeks_rumah_l" value="Layak">
                                                        <label class="form-check-label" for="indeks_rumah_l">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="indeks_rumah" id="indeks_rumah_t" value="Tidak Layak">
                                                        <label class="form-check-label" for="indeks_rumah_t">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kepemilikan Harta</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kepemilikan_harta" id="kepemilikan_harta_l" value="Layak">
                                                        <label class="form-check-label" for="kepemilikan_harta_l">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="kepemilikan_harta" id="kepemilikan_harta_t" value="Tidak Layak">
                                                        <label class="form-check-label" for="kepemilikan_harta_t">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pendapatan</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pendapatan" id="pendapatan_l" value="Layak">
                                                        <label class="form-check-label" for="pendapatan_l">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pendapatan" id="pendapatan_t" value="Tidak Layak">
                                                        <label class="form-check-label" for="pendapatan_t">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Indeks Kepribadian</th>
                                        <td>
                                            <div class="row text-nowrap">
                                                <div class="col">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="indeks_kepribadian" id="indeks_kepribadian_l" value="Layak">
                                                        <label class="form-check-label" for="indeks_kepribadian_l">Layak</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="indeks_kepribadian" id="indeks_kepribadian_t" value="Tidak Layak">
                                                        <label class="form-check-label" for="indeks_kepribadian_t">Tidak Layak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="rekomendasi_petugas" class="col-md-3 col-form-label">Rekomendasi Petugas Survey</label>
                        <div class="col-md-9">
                            <div class="row text-nowrap">
                                <div class="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_l" value="Layak">
                                        <label class="form-check-label" for="rekomendasi_petugas_l">Layak</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_d" value="Dipertimbangkan">
                                        <label class="form-check-label" for="rekomendasi_petugas_d">Dipertimbangkan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_t" value="Tidak Layak">
                                        <label class="form-check-label" for="rekomendasi_petugas_t">Tidak Layak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="ket" class="col-md-3 col-form-label">Keterangan</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="ket" name="ket" placeholder="Tulis keterangan tentang mustahik"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal -->