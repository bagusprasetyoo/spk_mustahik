<!-- Modal -->
<?php foreach ($all_mustahik as $dt_mustahik) { ?>
    <div class="modal fade" id="detail_calon_mustahik<?= $dt_mustahik->nik; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Data Mustahik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h5>DATA WILAYAH</h5>
                        <div class="col-12 col-sm-6">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Tanggal Registrasi</th>
                                        <td><?= $dt_mustahik->tgl_regis ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <td><?= $dt_mustahik->nama_kecamatan ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-sm-6">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Prov/Kab</th>
                                        <td><?= $dt_mustahik->prov_kab ?></td>
                                    </tr>
                                    <tr>
                                        <th>Desa/Kel</th>
                                        <td><?= $dt_mustahik->nama_desa ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>IDENTITAS MUSTAHIK</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>No KK</th>
                                        <td><?= $dt_mustahik->no_kk ?></td>
                                    </tr>
                                    <tr>
                                        <th>NIK</th>
                                        <td><?= $dt_mustahik->nik ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $dt_mustahik->nama ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Kepala Keluarga</th>
                                        <td><?= $dt_mustahik->nama_kk ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $dt_mustahik->alamat ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telp/HP</th>
                                        <td><?= $dt_mustahik->no_hp ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Keluarga</th>
                                        <td><?= $dt_mustahik->jumlah_keluarga ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bantuan ke</th>
                                        <td><?= $dt_mustahik->bantuan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Besar Bantuan</th>
                                        <td><?= $dt_mustahik->besar_bantuan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Ashnaf</th>
                                        <td><?= $dt_mustahik->jenis_ashnaf ?></td>
                                    </tr>
                                    <tr>
                                        <th>Program Bantuan</th>
                                        <td><?= $dt_mustahik->program_bantuan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sumber Dana</th>
                                        <td><?= $dt_mustahik->sumber_dana ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td><?= $dt_mustahik->pekerjaan ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>KEUANGAN KELUARGA</h5>
                        <!-- <p><b>1. Pendapatan Keluarga</b></p>
                        <p><b>2. Pengeluaran Keluarga</b></p> -->
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Status Pekerjaan Suami</th>
                                        <td><?= $dt_mustahik->status_pekerjaan_suami ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Pekerjaan Istri</th>
                                        <td><?= $dt_mustahik->status_pekerjaan_istri ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Pendapatan</th>
                                        <td><?= $dt_mustahik->total_pendapatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Simpanan</th>
                                        <td><?= $dt_mustahik->simpanan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Simpanan</th>
                                        <td><?= $dt_mustahik->jenis_simpanan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hutang/Cicilan</th>
                                        <td><?= $dt_mustahik->hutang ?></td>
                                    </tr>
                                    <tr>
                                        <th>Total Pengeluaran</th>
                                        <td><?= $dt_mustahik->total_pengeluaran ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>PARAMETER</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Halaman Rumah</th>
                                        <td><?= $dt_mustahik->halaman_rumah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ukuran Rumah</th>
                                        <td><?= $dt_mustahik->ukuran_rumah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dinding</th>
                                        <td><?= $dt_mustahik->dinding ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lantai</th>
                                        <td><?= $dt_mustahik->lantai ?></td>
                                    </tr>
                                    <tr>
                                        <th>Atap</th>
                                        <td><?= $dt_mustahik->atap ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ruang Tamu</th>
                                        <td><?= $dt_mustahik->ruang_tamu ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alat Dapur</th>
                                        <td><?= $dt_mustahik->alat_dapur ?></td>
                                    </tr>
                                    <tr>
                                        <th>MCK</th>
                                        <td><?= $dt_mustahik->mck ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sumber Air</th>
                                        <td><?= $dt_mustahik->sumber_air ?></td>
                                    </tr>
                                    <tr>
                                        <th>Daya Listrik</th>
                                        <td><?= $dt_mustahik->daya_listrik ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>KEPEMILIKAN HARTA</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>Sawah</th>
                                        <td><?= $dt_mustahik->sawah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Luas Sawah</th>
                                        <td><?= $dt_mustahik->luas_sawah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kepemilikan Kendaraan</th>
                                        <td><?= $dt_mustahik->kepemilikan_kendaraan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kendaraan</th>
                                        <td><?= $dt_mustahik->jenis_kendaraan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Ternak</th>
                                        <td><?= $dt_mustahik->ternak ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Ternak</th>
                                        <td><?= $dt_mustahik->jenis_ternak ?></td>
                                    </tr>
                                    <tr>
                                        <th>Elektronik</th>
                                        <td><?= $dt_mustahik->elektronik ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <h5>INDEKS KEPRIBADIAN</h5>
                        <div class="col-12">
                            <table class="table table-sm">
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>Anggota Keluarga melaksanakan ibadah sesuai syariat Islam</td>
                                        <td><?= $dt_mustahik->keluarga_beribadah ?></td>
                                    </tr>
                                    <tr>
                                        <td>Seluruh anggota keluarga sudah dapat makan minimal dua kali sehari</td>
                                        <td><?= $dt_mustahik->keluarga_jumlah_makan ?></td>
                                    </tr>
                                    <tr>
                                        <td>Seluruh anggota keluarga sudah memiliki pakaian berbeda untuk di rumah, tempat bekerja, sekolah dan bepergian</td>
                                        <td><?= $dt_mustahik->pakaian_layak ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bila anak sakit, sudah dibawa ke sarana kesehatan</td>
                                        <td><?= $dt_mustahik->sarana_kesehatan ?></td>
                                    </tr>
                                    <tr>
                                        <td>Siap bekerja keras dan cerdas dan melaksanakan ibadah dengan ikhlas</td>
                                        <td><?= $dt_mustahik->siap_kerja ?></td>
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
                                        <td><?= $dt_mustahik->shalat ?></td>
                                    </tr>
                                    <tr>
                                        <th>Puasa</th>
                                        <td><?= $dt_mustahik->puasa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Zakat & Infak</th>
                                        <td><?= $dt_mustahik->zakat ?></td>
                                    </tr>
                                    <tr>
                                        <th>Lingkungan Keluarga</th>
                                        <td><?= $dt_mustahik->lingkungan_keluarga ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kebijakan Pemerintah</th>
                                        <td><?= $dt_mustahik->kebijakan_pemerintah ?></td>
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
                                        <td><?= $dt_mustahik->indeks_rumah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kepemilikan Harta</th>
                                        <td><?= $dt_mustahik->kepemilikan_harta ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendapatan</th>
                                        <td><?= $dt_mustahik->pendapatan ?></td>
                                    </tr>
                                    <tr>
                                        <th>Indeks Kepribadian</th>
                                        <td><?= $dt_mustahik->indeks_kepribadian ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold">Rekomendasi Petugas Survey</p>
                        </div>
                        <div class="col-6">
                            <p class="<?php if ($dt_mustahik->rekomendasi_petugas == 'Layak') { ?><?= 'badge bg-success' ?><?php } else { ?><?= 'badge bg-secondary' ?><?php } ?>"><?= $dt_mustahik->rekomendasi_petugas; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bold">Keterangan</p>
                            <p><?= $dt_mustahik->ket; ?></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-icon btn-warning" data-bs-target="#edit_cln_mustahik" data-bs-toggle="modal" data-bs-dismiss="modal" title="Edit"> <span class="bx bx-edit"></span></button>
                    <button type="button" class="btn btn-icon btn-danger" data-bs-target="#delete_cln_mustahik" data-bs-toggle="modal" data-bs-dismiss="modal" title="Hapus"> <span class="bx bx-trash"></span></button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->