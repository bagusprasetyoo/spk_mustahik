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
                    <!-- <h5 class="card-header m-0 p-0">Small Table</h5> -->
                    <button type="button" class="btn btn-success mb-3" data-bs-target="#add_pengguna" data-bs-toggle="modal">Tambah Data</button>
                    <div class="text-nowrap">
                        <table class="table table-sm table-striped table-hover dtTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Nama</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1;
                                foreach ($all_pengguna as $dt_pengguna) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $dt_pengguna->username; ?></td>
                                        <td><?= $dt_pengguna->level; ?></td>
                                        <td><?= $dt_pengguna->nama_pengguna; ?></td>
                                        <td><?= $dt_pengguna->created_at; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="bx bx-edit" data-bs-target="#edit_pengguna<?= $dt_pengguna->id_pengguna; ?>" data-bs-toggle="modal"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash" data-bs-target="#delete_pengguna<?= $dt_pengguna->id_pengguna; ?>" data-bs-toggle="modal"></span>
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

<?php $this->load->view('pengguna/modal_add'); ?>
<?php $this->load->view('pengguna/modal_edit'); ?>
<?php $this->load->view('pengguna/modal_delete'); ?>