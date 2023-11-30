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
            <!-- Filter Mustahik -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col">Pilih Tanggal Registrasi</div>
                            <div class="col">
                                <input class="form-control" type="date" id="tgl_awal" name="tgl_awal" />
                            </div>
                            <div class="col">
                                <input class="form-control" type="date" id="tgl_akhir" name="tgl_akhir" />
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success">Pilih Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Small table -->
            <div class="card">
                <div class="card-body">
                    <div class="text-nowrap">
                        <table class="table table-sm table-striped table-hover dtTable compact">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Regis</th>
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
                                        <td><?= $dt_mustahik->tgl_regis; ?></td>
                                        <td><a href="#detail_calon_mustahik<?= $dt_mustahik->nik; ?>" data-bs-toggle="modal"><?= $dt_mustahik->nik; ?></a></td>
                                        <td><?= $dt_mustahik->no_kk; ?></td>
                                        <td><?= $dt_mustahik->nama; ?></td>
                                        <td><?= $dt_mustahik->nama_kecamatan; ?></td>
                                        <td><?= $dt_mustahik->nama_desa; ?></td>
                                        <td><?= $dt_mustahik->alamat; ?></td>
                                        <td><?= $dt_mustahik->jumlah_keluarga; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <span class="bx bx-show-alt" data-bs-target="#detail_calon_mustahik<?= $dt_mustahik->nik; ?>" data-bs-toggle="modal"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <span class="bx bx-edit" data-bs-target="#edit_calon_mustahik<?= $dt_mustahik->id; ?>" data-bs-toggle="modal"></span>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <span class="bx bx-trash" data-bs-target="#delete_calon_mustahik<?= $dt_mustahik->id; ?>" data-bs-toggle="modal"></span>
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