<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-6">
            <h4>
                <?= $title ?>
            </h4>
        </div>
        <div class="col-6 d-flex flex-row-reverse">
            <!-- Basic Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
            </nav>
            <!-- Basic Breadcrumb -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Small table -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Data Kecamatan
                    </h5>
                    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#add_kec">Tambah Data</button>
                    <div class="text-nowrap">
                        <table class="table table-sm table-striped table-hover dtTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1;
                                foreach ($all_kecamatan as $dt_kec) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $dt_kec->nama_kecamatan; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="bx bx-edit"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Small table -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Small table -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">
                        Data Desa & Kelurahan
                    </h5>
                    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#add_ds">Tambah Data</button>
                    <div class="text-nowrap">
                        <table class="table table-sm table-striped table-hover dtTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Nama Desa / Kelurahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1;
                                foreach ($all_desa as $dt_des) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $dt_des->nama_kecamatan; ?></td>
                                        <td><?= $dt_des->nama_desa; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="bx bx-edit"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Small table -->
        </div>
    </div>
</div>
<!-- / Content -->

<!-- Modal Tambah Kecamatan-->
<div class="modal fade" id="add_kec" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kecamatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add_kec" action="<?= base_url('wilayahcontroller/add_kec') ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kec" class="col-md-3 col-form-label">Nama Kecamatan</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="kec" name="kec" placeholder="Masukan nama kecamatan" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Close</button>
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
                <h5 class="modal-title">Tambah Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="add_ds" action="<?= base_url('wilayahcontroller/add_ds') ?>" method="POST">
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="kec" class="col-md-3 col-form-label">Pilih Kecamatan</label>
                        <div class="col-md-9">
                            <select id="kec" name="id_kec" class="form-select">
                                <option value="">-Pilih Kecamatan-</option>
                                <?php foreach ($all_kecamatan as $dt_kec) { ?>
                                    <option value="<?= $dt_kec->id; ?>" <?= set_value('id_kec') == $dt_kec->id ? "selected" : null; ?>>
                                        <?= $dt_kec->nama_kecamatan; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kec" class="col-md-3 col-form-label">Nama Desa</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" id="ds" name="ds" placeholder="Masukan nama kecamatan" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="location.reload()">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->