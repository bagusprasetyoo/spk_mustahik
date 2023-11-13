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

            <?php $this->view('layouts/alert'); ?>

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
                                                <span class="bx bx-edit" data-bs-target="#edit_kec<?= $dt_kec->id_kecamatan; ?>" data-bs-toggle="modal"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash" data-bs-target="#delete_kec<?= $dt_kec->id_kecamatan; ?>" data-bs-toggle="modal"></span>
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
                                foreach ($all_desa as $dt_ds) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $dt_ds->nama_kecamatan; ?></td>
                                        <td><?= $dt_ds->nama_desa; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="bx bx-edit" data-bs-target="#edit_ds<?= $dt_ds->id_desa ?>" data-bs-toggle="modal"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash" data-bs-target="#delete_ds<?= $dt_ds->id_desa ?>" data-bs-toggle="modal"></span>
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

<?php $this->load->view('wilayah/modal'); ?>