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
                    <!-- <h5 class="card-header m-0 p-0">Small Table</h5> -->
                    <button type="button" class="btn btn-success mb-3">Tambah Data</button>
                    <div class="text-nowrap">
                        <table id="dtTable" class="table table-sm table-striped table-hover dtTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>No. KK</th>
                                    <th>Nama</th>
                                    <th>Kecamatan</th>
                                    <th>Desa/Kelurahan</th>
                                    <th>Alamat</th>
                                    <th>Jum Kel</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <?php $i = 1;
                                foreach ($all_mustahik as $dt_mustahik) { ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><a href="#cln_mustahik<?= $dt_mustahik->nik; ?>" data-bs-toggle="modal"><?= $dt_mustahik->nik; ?></a></td>
                                        <td><?= $dt_mustahik->no_kk; ?></td>
                                        <td><?= $dt_mustahik->nama; ?></td>
                                        <td><?= $dt_mustahik->kec; ?></td>
                                        <td><?= $dt_mustahik->ds_kel; ?></td>
                                        <td><?= $dt_mustahik->alamat; ?></td>
                                        <td><?= $dt_mustahik->jumlah_keluarga; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-secondary btn-sm" data-bs-target="#cln_mustahik<?= $dt_mustahik->nik; ?>" data-bs-toggle="modal" data-bs-placement="top" title="Detail">
                                                <span class="bx bx-show-alt"></span>
                                            </button>
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

<?php $this->load->view('mustahik/calon_mustahik_modal'); ?>