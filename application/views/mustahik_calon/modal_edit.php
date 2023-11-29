<!-- Modal -->
<?php foreach ($all_mustahik as $dt_mustahik) { ?>
    <form class="add_edit_calonmustahik" action="<?= base_url('mustahikcaloncontroller/edit') ?>" method="POST">
        <div class="modal fade" id="edit_calon_mustahik<?= $dt_mustahik->id ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Calon Mustahik</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" name="id" value="<?= $dt_mustahik->id; ?>" />
                        <div class="row mb-2">
                            <h5>DATA WILAYAH</h5>

                            <div class="col-12 ">
                                <div class="mb-2 row">
                                    <label for="id_kecamatan" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                                    <div class="col-md-9">
                                        <select class="form-select id_kecamatan" name="id_kecamatan">
                                            <option value="">- Pilih Kecamatan -</option>
                                            <?php foreach ($all_kecamatan as $dt_kec) { ?>
                                                <option value="<?= $dt_kec->id_kecamatan; ?>" <?= $dt_mustahik->id_kecamatan == $dt_kec->id_kecamatan ? "selected" : null; ?>>
                                                    <?= $dt_kec->nama_kecamatan; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="id_desa" class="col-md-3 col-form-label">Pilih Desa</label>
                                    <div class="col-md-9">
                                        <!-- Menambahkan input tersembunyi untuk menyimpan id_desa awal -->
                                        <input type="hidden" name="id_desa_awal" value="<?= $dt_mustahik->id_desa; ?>">

                                        <select class="form-select id_desa" name="id_desa" disabled>
                                            <option value="">- Pilih Desa -</option>
                                            <?php foreach ($all_desa as $dt_desa) { ?>
                                                <option value="<?= $dt_desa->id_desa; ?>" <?= $dt_mustahik->id_desa == $dt_desa->id_desa ? "selected" : null; ?>>
                                                    <?= $dt_desa->nama_desa; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
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
                                        <input class="form-control" type="text" id="no_kk" name="no_kk" placeholder="Masukkan nomor kartu keluarga" value="<?= $dt_mustahik->no_kk; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="nik" class="col-md-3 col-form-label">NIK</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" value="<?= $dt_mustahik->nik; ?>" readonly />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="<?= $dt_mustahik->nama; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="nama_kk" class="col-md-3 col-form-label">Nama Kepala Keluarga</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="nama_kk" name="nama_kk" placeholder="Masukkan nama kepala keluarga" value="<?= $dt_mustahik->nama_kk; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Jl. xx No. xx RT. xx RW. xx"><?= $dt_mustahik->alamat; ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="no_hp" class="col-md-3 col-form-label">No HP</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="no_hp" name="no_hp" placeholder="628xxxxxxxxxx" value="<?= $dt_mustahik->no_hp; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="jumlah_keluarga" class="col-md-3 col-form-label">Jumlah Keluarga</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Masukkan jumlah keluarga" value="<?= $dt_mustahik->jumlah_keluarga; ?>" />
                                        <div class="form-text">
                                            Isi 0 jika sendirian.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="bantuan" class="col-md-3 col-form-label">Bantuan ke</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" id="bantuan" name="bantuan" placeholder="Bantuan ke" value="<?= $dt_mustahik->bantuan; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="besar_bantuan" class="col-md-3 col-form-label">Besar Bantuan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" id="besar_bantuan" name="besar_bantuan" placeholder="Masukan besar jumlah bantuan yang akan didapat" value="<?= $dt_mustahik->besar_bantuan; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="jenis_ashnaf" class="col-md-3 col-form-label">Jenis Ashnaf</label>
                                    <div class="col-md-9">
                                        <select id="jenis_ashnaf" name="jenis_ashnaf" class="form-select">
                                            <option value="" <?= $dt_mustahik->jenis_ashnaf == "" ? "selected" : null; ?>>-Pilih jenis ashnaf-</option>
                                            <option value="Fakir" <?= $dt_mustahik->jenis_ashnaf == "Fakir" ? "selected" : null; ?>>Fakir</option>
                                            <option value="Miskin" <?= $dt_mustahik->jenis_ashnaf == "Miskin" ? "selected" : null; ?>>Miskin</option>
                                            <option value="Muallaf" <?= $dt_mustahik->jenis_ashnaf == "Muallaf" ? "selected" : null; ?>>Muallaf</option>
                                            <option value="Fii Sabilillah" <?= $dt_mustahik->jenis_ashnaf == "Fii Sabilillah" ? "selected" : null; ?>>Fi sabilillah</option>
                                            <option value="Ibnu Sabil" <?= $dt_mustahik->jenis_ashnaf == "Ibnu Sabil" ? "selected" : null; ?>>Ibnu Sabil</option>
                                            <option value="Gharimi" <?= $dt_mustahik->jenis_ashnaf == "Gharimi" ? "selected" : null; ?>>Gharimi</option>
                                            <option value="Riqab" <?= $dt_mustahik->jenis_ashnaf == "Riqab" ? "selected" : null; ?>>Riqab</option>
                                            <option value="Amil" <?= $dt_mustahik->jenis_ashnaf == "Amil" ? "selected" : null; ?>>Amil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="program_bantuan" class="col-md-3 col-form-label">Program Bantuan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="program_bantuan" name="program_bantuan" placeholder="Pilih jenis program bantuan" value="<?= $dt_mustahik->program_bantuan; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="sumber_dana" class="col-md-3 col-form-label">Sumber Dana</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="sumber_dana" name="sumber_dana" placeholder="Pilih sumber dana" value="<?= $dt_mustahik->sumber_dana; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="pekerjaan" class="col-md-3 col-form-label">Pekerjaan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan data pekerjaan mustahik" value="<?= $dt_mustahik->pekerjaan; ?>" />
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
                                            <option value="" <?= $dt_mustahik->status_pekerjaan_suami == "" ? "selected" : null; ?>>-Pilih status pekerjaan suami-</option>
                                            <option value="Bekerja" <?= $dt_mustahik->status_pekerjaan_suami == "Bekerja" ? "selected" : null; ?>>Bekerja</option>
                                            <option value="Tidak Bekerja" <?= $dt_mustahik->status_pekerjaan_suami == "Tidak Bekerja" ? "selected" : null; ?>>Tidak Bekerja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="status_pekerjaan_istri" class="col-md-3 col-form-label">Status Pekerjaan Istri</label>
                                    <div class="col-md-9">
                                        <select id="status_pekerjaan_istri" name="status_pekerjaan_istri" class="form-select">
                                            <option value="" <?= $dt_mustahik->status_pekerjaan_istri == "" ? "selected" : null; ?>>-Pilih status pekerjaan istri-</option>
                                            <option value="Bekerja" <?= $dt_mustahik->status_pekerjaan_istri == "Bekerja" ? "selected" : null; ?>>Bekerja</option>
                                            <option value="Tidak Bekerja" <?= $dt_mustahik->status_pekerjaan_istri == "Tidak Bekerja" ? "selected" : null; ?>>Tidak Bekerja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="total_pendapatan" class="col-md-3 col-form-label">Total Pendapatan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="total_pendapatan" name="total_pendapatan" placeholder="Masukan seluruh total pendapatan sebulan" value="<?= $dt_mustahik->total_pendapatan; ?>" />
                                        <div class="form-text">Pendapatan yang didapat oleh satu keluarga mustahik dalam sebulan</div>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="simpanan" class="col-md-3 col-form-label">Simpanan</label>
                                    <div class="col-md-9">
                                        <select id="simpanan" name="simpanan" class="form-select">
                                            <option value="" <?= $dt_mustahik->simpanan == "" ? "selected" : null; ?>>-Simpanan-</option>
                                            <option value="Ada" <?= $dt_mustahik->simpanan == "Ada" ? "selected" : null; ?>>Ada</option>
                                            <option value="Tidak Ada" <?= $dt_mustahik->simpanan == "Tidak Ada" ? "selected" : null; ?>>Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="jenis_simpanan" class="col-md-3 col-form-label">Jenis Simpanan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="jenis_simpanan" name="jenis_simpanan" placeholder="Masukkan jenis simpanan yang dimiliki. Contoh Emas" value="<?= $dt_mustahik->jenis_simpanan; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="hutang" class="col-md-3 col-form-label">Hutang/Cicilan</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="hutang" name="hutang" placeholder="Masukkan seluruh total hutang/cicilan yang dimiliki" value="<?= $dt_mustahik->hutang; ?>" />
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="total_pengeluaran" class="col-md-3 col-form-label">Total Pengeluaran</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="total_pengeluaran" name="total_pengeluaran" placeholder="Masukan seluruh total pengeluaran sebulan" value="<?= $dt_mustahik->total_pengeluaran; ?>" />
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
                                            <option value="" <?= $dt_mustahik->halaman_rumah == "" ? "selected" : null; ?>>-Pilih luas per meter persegi-</option>
                                            <option value="< 5 m2" <?= $dt_mustahik->halaman_rumah == "< 5 m2" ? "selected" : null; ?>>
                                                < 5 m2</option>
                                            <option value="5-7 m2" <?= $dt_mustahik->halaman_rumah == "5-7 m2" ? "selected" : null; ?>>5-7 m2</option>
                                            <option value="7-9 m2" <?= $dt_mustahik->halaman_rumah == "7-9 m2" ? "selected" : null; ?>>7-9 m2</option>
                                            <option value="> 9 m2" <?= $dt_mustahik->halaman_rumah == "> 9 m2" ? "selected" : null; ?>>
                                                > 9 m2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="ukuran_rumah" class="col-md-3 col-form-label">Luas ukuran rumah</label>
                                    <div class="col-md-9">
                                        <select id="ukuran_rumah" name="ukuran_rumah" class="form-select">
                                            <option value="" <?= $dt_mustahik->ukuran_rumah == "" ? "selected" : null; ?>>-Pilih luas per meter persegi-</option>
                                            <option value="< 4 m2" <?= $dt_mustahik->ukuran_rumah == "< 4 m2" ? "selected" : null; ?>>
                                                < 4 m2</option>
                                            <option value="4-5 m2" <?= $dt_mustahik->ukuran_rumah == "4-5 m2" ? "selected" : null; ?>>4-5 m2</option>
                                            <option value="6-8 m2" <?= $dt_mustahik->ukuran_rumah == "6-8 m2" ? "selected" : null; ?>>6-8 m2</option>
                                            <option value="> 8 m2" <?= $dt_mustahik->ukuran_rumah == "> 8 m2" ? "selected" : null; ?>>
                                                > 8 m2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="dinding" class="col-md-3 col-form-label">Jenis dinding rumah</label>
                                    <div class="col-md-9">
                                        <select id="dinding" name="dinding" class="form-select">
                                            <option value="" <?= $dt_mustahik->dinding == "" ? "selected" : null; ?>>-Pilih jenis dinding rumah-</option>
                                            <option value="Bambu/Triplek" <?= $dt_mustahik->dinding == "Bambu/Triplek" ? "selected" : null; ?>>Bambu/Triplek</option>
                                            <option value="Semen" <?= $dt_mustahik->dinding == "Semen" ? "selected" : null; ?>>Semen</option>
                                            <option value="Bata" <?= $dt_mustahik->dinding == "Bata" ? "selected" : null; ?>>Bata</option>
                                            <option value="Kayu" <?= $dt_mustahik->dinding == "Kayu" ? "selected" : null; ?>>Kayu</option>
                                            <option value="Papan" <?= $dt_mustahik->dinding == "Papan" ? "selected" : null; ?>>Papan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="lantai" class="col-md-3 col-form-label">Jenis lantai rumah</label>
                                    <div class="col-md-9">
                                        <select id="lantai" name="lantai" class="form-select">
                                            <option value="" <?= $dt_mustahik->lantai == "" ? "selected" : null; ?>>-Pilih jenis lantai rumah-</option>
                                            <option value="Bambu/Triplek" <?= $dt_mustahik->lantai == "Bambu/Triplek" ? "selected" : null; ?>>Tanah</option>
                                            <option value="Penggung" <?= $dt_mustahik->lantai == "Penggung" ? "selected" : null; ?>>Penggung</option>
                                            <option value="Plester" <?= $dt_mustahik->lantai == "Plester" ? "selected" : null; ?>>Plester</option>
                                            <option value="Kayu" <?= $dt_mustahik->lantai == "Kayu" ? "selected" : null; ?>>Kayu</option>
                                            <option value="Papan" <?= $dt_mustahik->lantai == "Papan" ? "selected" : null; ?>>Papan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="atap" class="col-md-3 col-form-label">Atap</label>
                                    <div class="col-md-9">
                                        <select id="atap" name="atap" class="form-select">
                                            <option value="" <?= $dt_mustahik->atap == "" ? "selected" : null; ?>>-Pilih jenis atap rumah-</option>
                                            <option value="Jerami" <?= $dt_mustahik->atap == "Jerami" ? "selected" : null; ?>>Jerami</option>
                                            <option value="Asbes/Seng" <?= $dt_mustahik->atap == "Asbes/Seng" ? "selected" : null; ?>>Asbes/Seng</option>
                                            <option value="Genteng" <?= $dt_mustahik->atap == "Genteng" ? "selected" : null; ?>>Genteng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="ruang_tamu" class="col-md-3 col-form-label">Ruang tamu</label>
                                    <div class="col-md-9">
                                        <select id="ruang_tamu" name="ruang_tamu" class="form-select">
                                            <option value="" <?= $dt_mustahik->ruang_tamu == "" ? "selected" : null; ?>>-Pilih jenis ruang tamu rumah-</option>
                                            <option value="Lesehan" <?= $dt_mustahik->ruang_tamu == "Lesehan" ? "selected" : null; ?>>Lesehan</option>
                                            <option value="Kayu" <?= $dt_mustahik->ruang_tamu == "Kayu" ? "selected" : null; ?>>Kayu</option>
                                            <option value="Sofa" <?= $dt_mustahik->ruang_tamu == "Sofa" ? "selected" : null; ?>>Sofa</option>
                                            <option value="Tidak Ada" <?= $dt_mustahik->ruang_tamu == "Tidak Ada" ? "selected" : null; ?>>Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="alat_dapur" class="col-md-3 col-form-label">Alat dapur</label>
                                    <div class="col-md-9">
                                        <select id="alat_dapur" name="alat_dapur" class="form-select">
                                            <option value="" <?= $dt_mustahik->alat_dapur == "" ? "selected" : null; ?>>-Pilih jenis alat dapur rumah-</option>
                                            <option value="Kompor Biasa" <?= $dt_mustahik->alat_dapur == "Kompor Biasa" ? "selected" : null; ?>>Kompor Biasa</option>
                                            <option value="Kompor Gas" <?= $dt_mustahik->alat_dapur == "Kompor Gas" ? "selected" : null; ?>>Kompor Gas</option>
                                            <option value="Kompor Listrik" <?= $dt_mustahik->alat_dapur == "Kompor Listrik" ? "selected" : null; ?>>Kompor Listrik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="mck" class="col-md-3 col-form-label">Mandi Cuci Kakus (MCK)</label>
                                    <div class="col-md-9">
                                        <select id="mck" name="mck" class="form-select">
                                            <option value="" <?= $dt_mustahik->mck == "" ? "selected" : null; ?>>-Pilih jenis mck-</option>
                                            <option value="Berbagi Pakai" <?= $dt_mustahik->mck == "Berbagi Pakai" ? "selected" : null; ?>>Berbagi Pakai</option>
                                            <option value="Sendiri Di Dalam" <?= $dt_mustahik->mck == "Sendiri Di Dalam" ? "selected" : null; ?>>Sendiri Di Dalam</option>
                                            <option value="Sendiri Di Luar" <?= $dt_mustahik->mck == "Sendiri Di Luar" ? "selected" : null; ?>>Sendiri Di Luar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="sumber_air" class="col-md-3 col-form-label">Sumber air</label>
                                    <div class="col-md-9">
                                        <select id="sumber_air" name="sumber_air" class="form-select">
                                            <option value="" <?= $dt_mustahik->sumber_air == "" ? "selected" : null; ?>>-Pilih jenis sumber air yang digunakan-</option>
                                            <option value="Sungai" <?= $dt_mustahik->sumber_air == "Sungai" ? "selected" : null; ?>>Sungai</option>
                                            <option value="Sumur" <?= $dt_mustahik->sumber_air == "Sumur" ? "selected" : null; ?>>Sumur</option>
                                            <option value="PDAM" <?= $dt_mustahik->sumber_air == "PDAM" ? "selected" : null; ?>>PDAM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="daya_listrik" class="col-md-3 col-form-label">Daya listrik</label>
                                    <div class="col-md-9">
                                        <select id="daya_listrik" name="daya_listrik" class="form-select">
                                            <option value="" <?= $dt_mustahik->daya_listrik == "" ? "selected" : null; ?>>-Pilih jenis daya listrik yang digunakan-</option>
                                            <option value="450 kwh" <?= $dt_mustahik->daya_listrik == "450 kwh" ? "selected" : null; ?>>450 kwh</option>
                                            <option value="900 kwh" <?= $dt_mustahik->daya_listrik == "900 kwh" ? "selected" : null; ?>>900 kwh</option>
                                            <option value="1300 kwh" <?= $dt_mustahik->daya_listrik == "1300 kwh" ? "selected" : null; ?>>1300 kwh</option>
                                            <option value="> 1300 kwh" <?= $dt_mustahik->daya_listrik == "> 1300 kwh" ? "selected" : null; ?>>> 1300 kwh</option>
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
                                            <option value="" <?= $dt_mustahik->sawah == "" ? "selected" : null; ?>>-Pilih-</option>
                                            <option value="Warisan/Hibah" <?= $dt_mustahik->sawah == "Warisan/Hibah" ? "selected" : null; ?>>Warisan/Hibah</option>
                                            <option value="Beli" <?= $dt_mustahik->sawah == "Beli" ? "selected" : null; ?>>Beli</option>
                                            <option value="Tidak Ada" <?= $dt_mustahik->sawah == "Tidak Ada" ? "selected" : null; ?>>Tidak Ada</option>
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
                                            <option value="" <?= $dt_mustahik->kepemilikan_kendaraan == "" ? "selected" : null; ?>>-Pilih-</option>
                                            <option value="Warisan/Hibah" <?= $dt_mustahik->kepemilikan_kendaraan == "Warisan/Hibah" ? "selected" : null; ?>>Warisan/Hibah</option>
                                            <option value="Beli" <?= $dt_mustahik->kepemilikan_kendaraan == "Beli" ? "selected" : null; ?>>Beli</option>
                                            <option value="Tidak Ada" <?= $dt_mustahik->kepemilikan_kendaraan == "Tidak Ada" ? "selected" : null; ?>>Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="jenis_kendaraan" class="col-md-3 col-form-label">Jenis Kendaraan</label>
                                    <div class="col-md-9">
                                        <select id="jenis_kendaraan" name="jenis_kendaraan" class="form-select">
                                            <option value="" <?= $dt_mustahik->jenis_kendaraan == "" ? "selected" : null; ?>>-Pilih-</option>
                                            <option value="Roda 2" <?= $dt_mustahik->jenis_kendaraan == "Roda 2" ? "selected" : null; ?>>Roda 2</option>
                                            <option value="Roda 4" <?= $dt_mustahik->jenis_kendaraan == "Roda 4" ? "selected" : null; ?>>Roda 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-2 row">
                                    <label for="ternak" class="col-md-3 col-form-label">Ternak</label>
                                    <div class="col-md-9">
                                        <select id="ternak" name="ternak" class="form-select">
                                            <option value="" <?= $dt_mustahik->ternak == "" ? "selected" : null; ?>>-Pilih-</option>
                                            <option value="Warisan/Hibah" <?= $dt_mustahik->ternak == "Warisan/Hibah" ? "selected" : null; ?>>Warisan/Hibah</option>
                                            <option value="Beli" <?= $dt_mustahik->ternak == "Beli" ? "selected" : null; ?>>Beli</option>
                                            <option value="Tidak Ada" <?= $dt_mustahik->ternak == "Tidak Ada" ? "selected" : null; ?>>Tidak Ada</option>
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
                                                            <input class="form-check-input" type="radio" name="keluarga_beribadah" id="keluarga_beribadah_y" value="Ya" <?= ($dt_mustahik->keluarga_beribadah == 'Ya') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="keluarga_beribadah_y">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keluarga_beribadah" id="keluarga_beribadah_t" value="Tidak" <?= ($dt_mustahik->keluarga_beribadah == 'Tidak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="keluarga_jumlah_makan" id="keluarga_jumlah_makan_y" value="Ya" <?= ($dt_mustahik->keluarga_jumlah_makan == 'Ya') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="keluarga_jumlah_makan_y">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="keluarga_jumlah_makan" id="keluarga_jumlah_makan_t" value="Tidak" <?= ($dt_mustahik->keluarga_jumlah_makan == 'Tidak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="pakaian_layak" id="pakaian_layak_y" value="Ya" <?= ($dt_mustahik->pakaian_layak == 'Ya') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="pakaian_layak_y">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pakaian_layak" id="pakaian_layak_t" value="Tidak" <?= ($dt_mustahik->pakaian_layak == 'Tidak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="sarana_kesehatan" id="sarana_kesehatan_y" value="Ya" <?= ($dt_mustahik->sarana_kesehatan == 'Ya') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="sarana_kesehatan_y">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sarana_kesehatan" id="sarana_kesehatan_t" value="Tidak" <?= ($dt_mustahik->sarana_kesehatan == 'Tidak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="siap_kerja" id="siap_kerja_y" value="Ya" <?= ($dt_mustahik->siap_kerja == 'Ya') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="siap_kerja_y">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="siap_kerja" id="siap_kerja_t" value="Tidak" <?= ($dt_mustahik->siap_kerja == 'Tidak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="shalat" id="shalat_1" value="1" <?= ($dt_mustahik->shalat == '1') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="shalat_1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="shalat" id="shalat_2" value="2" <?= ($dt_mustahik->shalat == '2') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="shalat_2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="shalat" id="shalat_3" value="3" <?= ($dt_mustahik->shalat == '3') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="shalat_3">3</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="shalat" id="shalat_4" value="4" <?= ($dt_mustahik->shalat == '4') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="shalat_4">4</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="shalat" id="shalat_5" value="5" <?= ($dt_mustahik->shalat == '5') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="puasa" id="puasa_1" value="1" <?= ($dt_mustahik->puasa == '1') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="puasa_1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="puasa" id="puasa_2" value="2" <?= ($dt_mustahik->puasa == '2') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="puasa_2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="puasa" id="puasa_3" value="3" <?= ($dt_mustahik->puasa == '3') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="puasa_3">3</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="puasa" id="puasa_4" value="4" <?= ($dt_mustahik->puasa == '4') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="puasa_4">4</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="puasa" id="puasa_5" value="5" <?= ($dt_mustahik->puasa == '5') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="zakat" id="zakat_1" value="1" <?= ($dt_mustahik->zakat == '1') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="zakat_1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zakat" id="zakat_2" value="2" <?= ($dt_mustahik->zakat == '2') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="zakat_2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zakat" id="zakat_3" value="3" <?= ($dt_mustahik->zakat == '3') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="zakat_3">3</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zakat" id="zakat_4" value="4" <?= ($dt_mustahik->zakat == '4') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="zakat_4">4</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="zakat" id="zakat_5" value="5" <?= ($dt_mustahik->zakat == '5') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_1" value="1" <?= ($dt_mustahik->lingkungan_keluarga == '1') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="lingkungan_keluarga_1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_2" value="2" <?= ($dt_mustahik->lingkungan_keluarga == '2') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="lingkungan_keluarga_2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_3" value="3" <?= ($dt_mustahik->lingkungan_keluarga == '3') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="lingkungan_keluarga_3">3</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_4" value="4" <?= ($dt_mustahik->lingkungan_keluarga == '4') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="lingkungan_keluarga_4">4</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="lingkungan_keluarga" id="lingkungan_keluarga_5" value="5" <?= ($dt_mustahik->lingkungan_keluarga == '5') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_1" value="1" <?= ($dt_mustahik->kebijakan_pemerintah == '1') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="kebijakan_pemerintah_1">1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_2" value="2" <?= ($dt_mustahik->kebijakan_pemerintah == '2') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="kebijakan_pemerintah_2">2</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_3" value="3" <?= ($dt_mustahik->kebijakan_pemerintah == '3') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="kebijakan_pemerintah_3">3</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_4" value="4" <?= ($dt_mustahik->kebijakan_pemerintah == '4') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="kebijakan_pemerintah_4">4</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kebijakan_pemerintah" id="kebijakan_pemerintah_5" value="5" <?= ($dt_mustahik->kebijakan_pemerintah == '5') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="indeks_rumah" id="indeks_rumah_l" value="Layak" <?= ($dt_mustahik->indeks_rumah == 'Layak') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="indeks_rumah_l">Layak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="indeks_rumah" id="indeks_rumah_t" value="Tidak Layak" <?= ($dt_mustahik->indeks_rumah == 'Tidak Layak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="kepemilikan_harta" id="kepemilikan_harta_l" value="Layak" <?= ($dt_mustahik->kepemilikan_harta == 'Layak') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="kepemilikan_harta_l">Layak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="kepemilikan_harta" id="kepemilikan_harta_t" value="Tidak Layak" <?= ($dt_mustahik->kepemilikan_harta == 'Tidak Layak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="pendapatan" id="pendapatan_l" value="Layak" <?= ($dt_mustahik->pendapatan == 'Layak') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="pendapatan_l">Layak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pendapatan" id="pendapatan_t" value="Tidak Layak" <?= ($dt_mustahik->pendapatan == 'Tidak Layak') ? 'checked' : ''; ?>>
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
                                                            <input class="form-check-input" type="radio" name="indeks_kepribadian" id="indeks_kepribadian_l" value="Layak" <?= ($dt_mustahik->indeks_kepribadian == 'Layak') ? 'checked' : ''; ?>>
                                                            <label class="form-check-label" for="indeks_kepribadian_l">Layak</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="indeks_kepribadian" id="indeks_kepribadian_t" value="Tidak Layak" <?= ($dt_mustahik->indeks_kepribadian == 'Tidak Layak') ? 'checked' : ''; ?>>
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
                                            <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_l" value="Layak" <?= ($dt_mustahik->rekomendasi_petugas == 'Layak') ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="rekomendasi_petugas_l">Layak</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_d" value="Dipertimbangkan" <?= ($dt_mustahik->rekomendasi_petugas == 'Dipertimbangkan') ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="rekomendasi_petugas_d">Dipertimbangkan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rekomendasi_petugas" id="rekomendasi_petugas_t" value="Tidak Layak" <?= ($dt_mustahik->rekomendasi_petugas == 'Tidak Layak') ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="rekomendasi_petugas_t">Tidak Layak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 row">
                            <label for="ket" class="col-md-3 col-form-label">Keterangan</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="ket" name="ket" placeholder="Tulis keterangan tentang mustahik"><?= $dt_mustahik->ket; ?></textarea>
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
<?php } ?>
<!-- End Modal -->