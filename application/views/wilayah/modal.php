<!-- Modal Tambah Kecamatan-->
<div class="modal fade" id="add_kec" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kecamatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add_kec" action="<?= base_url('wilayahcontroller/add_kec') ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="nama_kec" class="col-md-3 col-form-label">Nama Kecamatan</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="nama_kec" name="nama_kec" placeholder="Masukan nama kecamatan" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Tambah Desa-->
<div class="modal fade" id="add_ds" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add_edit_ds" action="<?= base_url('wilayahcontroller/add_ds') ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="id_kec" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                        <div class="col-md-9">
                            <select id="id_kec" name="id_kec" class="form-select">
                                <option value="">-Pilih Kecamatan-</option>
                                <?php foreach ($all_kecamatan as $dt_kec) { ?>
                                    <option value="<?= $dt_kec->id_kecamatan; ?>" <?= set_value('id_kec') == $dt_kec->id_kecamatan ? "selected" : null; ?>>
                                        <?= $dt_kec->nama_kecamatan; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_ds" class="col-md-3 col-form-label">Nama Desa</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="nama_ds" name="nama_ds" placeholder="Masukan nama kecamatan" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Edit Kecamatan-->
<?php foreach ($all_kecamatan as $dt_kec) { ?>
    <div class="modal fade" id="edit_kec<?= $dt_kec->id_kecamatan; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Kecamatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="edit_kec" action="<?= base_url('wilayahcontroller/edit_kec') ?>" method="POST">
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="nama_kec" class="col-md-3 col-form-label">Nama Kecamatan</label>
                            <div class="col-md-9">

                                <input type="hidden" name="id" value="<?= $dt_kec->id_kecamatan; ?>" /> <!-- parameter id yang disembunyikan -->

                                <input class="form-control" type="text" id="nama_kec" name="nama_kec" placeholder="Masukan nama kecamatan" value="<?= $dt_kec->nama_kecamatan; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->

<!-- Modal Edit Desa-->
<?php foreach ($all_desa as $dt_ds) { ?>
    <div class="modal fade" id="edit_ds<?= $dt_ds->id_desa ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="add_edit_ds" action="<?= base_url('wilayahcontroller/edit_ds') ?>" method="POST">
                    <div class="modal-body">
                        <div class="mb-3 row">

                            <input type="hidden" name="id" value="<?= $dt_ds->id_desa; ?>" /> <!-- parameter id yang disembunyikan -->

                            <label for="id_kec" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                            <div class="col-md-9">
                                <select id="id_kec" name="id_kec" class="form-select">
                                    <option value="" <?= $dt_ds->id_kecamatan == '' ? "selected" : null; ?>>-Pilih Kecamatan-</option>
                                    <?php foreach ($all_kecamatan as $dt_kec) { ?>
                                        <option value="<?= $dt_kec->id_kecamatan; ?>" <?= $dt_kec->id_kecamatan == $dt_ds->id_kecamatan  ? "selected" : null; ?>>
                                            <?= $dt_kec->nama_kecamatan; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_ds" class="col-md-3 col-form-label">Nama Desa</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="nama_ds" name="nama_ds" placeholder="Masukan nama kecamatan" value="<?= $dt_ds->nama_desa; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->

<!-- Modal Hapus Kecamatan-->
<?php foreach ($all_kecamatan as $dt_kec) { ?>
    <div class="modal fade" id="delete_kec<?= $dt_kec->id_kecamatan; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?= base_url('wilayahcontroller/delete_kec') ?>" method="POST">
                    <div class="modal-body">
                        <h5 class="modal-title"><span class="badge badge-center bg-label-danger"><span class="bx bx-error"></span></span>
                            Anda yakin ingin menghapus data Kecamatan <strong><?= $dt_kec->nama_kecamatan ?></strong>?
                        </h5>

                        <input type="hidden" name="id" value="<?= $dt_kec->id_kecamatan; ?>" /> <!-- parameter id yang disembunyikan -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->

<!-- Modal Hapus Desa-->
<?php foreach ($all_desa as $dt_ds) { ?>
    <div class="modal fade" id="delete_ds<?= $dt_ds->id_desa ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?= base_url('wilayahcontroller/delete_ds') ?>" method="POST">
                    <div class="modal-body">
                        <h5 class="modal-title"><span class="badge badge-center bg-label-danger"><span class="bx bx-error"></span></span>
                            Anda yakin ingin menghapus data Desa <strong><?= $dt_ds->nama_desa ?></strong>,
                            Kec. <strong><?= $dt_ds->nama_kecamatan ?></strong>?
                        </h5>

                        <input type="hidden" name="id" value="<?= $dt_ds->id_desa; ?>" /> <!-- parameter id yang disembunyikan -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->