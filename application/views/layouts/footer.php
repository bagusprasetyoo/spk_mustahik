<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️
        </div>
        <div class="d-none d-lg-inline-block">
            <a href="https://baznas.go.id/" class="footer-link me-4" target="_blank">baznas.go.id</a>
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<div class="buy-now">
    <a href="#uptotop" class="btn btn-icon btn-outline-success btn-buy-now"><span class="bx bx-chevron-up"></span></a>
</div>

<?php $this->load->view('layouts/modal_logout'); ?>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- Main JS -->
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<!-- DataTables JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/datatables/datatables.min.js"></script>
<!-- Page JS -->
<script src="<?= base_url(); ?>/assets/js/dashboards-analytics.js"></script>
<!-- JQuery Validation JS -->
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/libs/jquery-validation/additional-methods.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Custom Script -->

<!-- Script untuk memilih desa otomatis berdasarkan kecamatan -->
<script>
    $(document).ready(function() {
        $('#id_kecamatan').change(function() {
            var id_kecamatan = $(this).val();

            // Mengirimkan permintaan AJAX ke server untuk mendapatkan data desa berdasarkan kecamatan
            $.ajax({
                url: '<?= base_url('wilayahcontroller/get_desa_by_kecamatan'); ?>',
                type: 'post',
                data: {
                    id_kecamatan: id_kecamatan
                },
                dataType: 'json',
                success: function(response) {
                    // Mengosongkan dan menambahkan opsi desa berdasarkan respons dari server
                    $('#id_desa').empty().append('<option value="">- Pilih Desa -</option>');
                    $.each(response, function(index, data) {
                        $('#id_desa').append('<option value="' + data.id_desa + '">' + data.nama_desa + '</option>');
                    });

                    // Mengaktifkan dropdown desa setelah mendapatkan data
                    $('#id_desa').prop('disabled', false);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Menggunakan kelas CSS untuk mengaitkan perubahan pada setiap dropdown kecamatan
        $('.id_kecamatan').change(function () {
            var id_kecamatan = $(this).val();
            var id_desa_element = $(this).closest('.add_edit_calonmustahik').find('.id_desa');

            $.ajax({
                url: '<?= base_url('wilayahcontroller/get_desa_by_kecamatan'); ?>',
                type: 'post',
                data: { id_kecamatan: id_kecamatan },
                dataType: 'json',
                success: function (response) {
                    id_desa_element.empty().append('<option value="">- Pilih Desa -</option>');
                    $.each(response, function (index, data) {
                        id_desa_element.append('<option value="' + data.id_desa + '">' + data.nama_desa + '</option>');
                    });
                    id_desa_element.prop('disabled', false);
                }
            });
        });
    });
</script>

<!-- Script Datatable -->
<script>
    $(document).ready(function() {
        $('.dtTable').DataTable({
            "lengthChange": true,
            "autoWidth": true,
            "initComplete": function(settings, json) {
                $(".dtTable").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
            },
            "fixedColumns": {
                rightColumns: 1,
            },
        });
    })
</script>

<!-- Script form validasi menggunakan JQuery -->
<script>
    $(function() {
        // custom rules
        jQuery.validator.addMethod("letter", function(value, element) {
            return this.optional(element) || /^[A-Za-z.',-\s]+$/.test(value);
        }, "Inputan harus berupa huruf!");

        jQuery.validator.addMethod("alphanum", function(value, element) {
            return this.optional(element) || /^[a-z][a-z0-9\._]*$/.test(value);
        }, "Inputan harus berupa dan diawali huruf kecil, angka, underscore (_), atau titik (.) ");
        /*  ^ beginning of line
            [a-z] character class for lower values, to match the first letter
            [-a-z0-9\._] character class for the rest of the required value
            * zero or more for the last class
            $ end of String 
            https://stackoverflow.com/questions/1744377/regex-for-a-z-0-9-and*/

        // variable untuk rule yg sama
        var req = "Data harus diisi!"
        var chose = "Data harus dipilih!"
        var num = "Data harus berupa angka!"
        var element = {
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.col-md-9').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        };

        // VALIDASI UNTUK DATA WILAYAH
        // sintaks form add & edit dipisah
        $('.add_kec').validate({
            rules: {
                nama_kec: {
                    required: true,
                    letter: true
                }
            },
            messages: {
                nama_kec: {
                    required: req
                }
            },
            ...element
        });
        $('.edit_kec').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    nama_kec: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    nama_kec: {
                        required: req
                    }
                },
                ...element
            })
        });

        // contoh sintaks yg digunakan untuk 2 form sekaligus
        $('.add_edit_ds').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    id_kec: {
                        required: true,
                    },
                    nama_ds: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    id_kec: req,
                    nama_ds: {
                        required: req
                    }
                },
                ...element
            })
        });

        // VALIDASI UNTUK DATA PENGGUNA
        $('.add_edit_peng').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    username: {
                        required: true,
                        alphanum: true,
                        minlength: 3,
                        remote: {
                            url: "<?= base_url() ?>/penggunacontroller/check_username",
                            type: "post",
                            data: {
                                username: function() {
                                    return $("#username").val();
                                }
                            }
                        }
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    passconf: {
                        required: true,
                        equalTo: "#password"
                    },
                    level: {
                        required: true,
                    },
                    nama_pengguna: {
                        required: true,
                        letter: true
                    }
                },
                messages: {
                    username: {
                        required: req,
                        minlength: "username minimal memiliki 3 karakter",
                        remote: "Username sudah digunakan, gunakan username lainnya"
                    },
                    password: {
                        required: req,
                        minlength: "Password minimal 5 karakter"
                    },
                    passconf: {
                        required: req,
                        equalTo: "Password tidak cocok"
                    },
                    level: {
                        required: chose,
                    },
                    nama_pengguna: {
                        required: req,
                    }
                },
                ...element
            })
        });

        // VALIDASI UNTUK DATA CALON MUSTAHIK
        $('.add_edit_calonmustahik').each(function() {
            var form = $(this);
            form.validate({
                rules: {
                    id_kecamatan: "required",
                    id_desa: "required",
                    no_kk: {
                        required: true,
                        number: true,
                    },
                    nik: {
                        required: true,
                        number: true,
                        remote: {
                            url: "<?= base_url() ?>/mustahikcaloncontroller/check_nik",
                            type: "post",
                            data: {
                                username: function() {
                                    return $("#nik").val();
                                }
                            }
                        }
                    },
                    nama: {
                        required: true,
                        letter: true,
                    },
                    nama_kk: {
                        required: true,
                        letter: true,
                    },
                    alamat: "required",
                    no_hp: {
                        required: true,
                        number: true,
                    },
                    jumlah_keluarga: "required",
                    bantuan: "required",
                    besar_bantuan: "required",
                    jenis_ashnaf: "required",
                    program_bantuan: "required",
                    sumber_dana: "required",
                    pekerjaan: "required",
                    status_pekerjaan_suami: "required",
                    status_pekerjaan_istri: "required",
                    total_pendapatan: "required",
                    simpanan: "required",
                    // jenis_simpanan: "required",
                    // hutang: "required",
                    total_pengeluaran: "required",
                    halaman_rumah: "required",
                    ukuran_rumah: "required",
                    dinding: "required",
                    lantai: "required",
                    atap: "required",
                    ruang_tamu: "required",
                    alat_dapur: "required",
                    mck: "required",
                    sumber_air: "required",
                    daya_listrik: "required",
                    sawah: "required",
                    // luas_sawah: "required",
                    kepemilikan_kendaraan: "required",
                    // jenis_kendaraan: "required",
                    ternak: "required",
                    // jenis_ternak: "required",
                    // elektronik: "required",
                    keluarga_beribadah: "required",
                    keluarga_jumlah_makan: "required",
                    pakaian_layak: "required",
                    sarana_kesehatan: "required",
                    siap_kerja: "required",
                    shalat: "required",
                    puasa: "required",
                    zakat: "required",
                    lingkungan_keluarga: "required",
                    kebijakan_pemerintah: "required",
                    indeks_rumah: "required",
                    kepemilikan_harta: "required",
                    pendapatan: "required",
                    indeks_kepribadian: "required",
                    rekomendasi_petugas: "required",
                    // ket: "required",
                },
                messages: {
                    id_kecamatan: chose,
                    id_desa: chose,
                    no_kk: {
                        required: req,
                        number: num,
                    },
                    nik: {
                        required: req,
                        number: num,
                        remote: "NIK sudah digunakan, NIK tidak boleh sama!"
                    },
                    nama: {
                        required: req,
                    },
                    nama_kk: {
                        required: req,
                    },
                    alamat: req,
                    no_hp: {
                        required: req,
                        number: num,
                    },
                    jumlah_keluarga: req,
                    bantuan: req,
                    besar_bantuan: req,
                    jenis_ashnaf: chose,
                    program_bantuan: req,
                    sumber_dana: req,
                    pekerjaan: req,
                    status_pekerjaan_suami: chose,
                    status_pekerjaan_istri: chose,
                    total_pendapatan: req,
                    simpanan: chose,
                    // jenis_simpanan: req,
                    // hutang: req,
                    total_pengeluaran: req,
                    halaman_rumah: chose,
                    ukuran_rumah: chose,
                    dinding: chose,
                    lantai: chose,
                    atap: chose,
                    ruang_tamu: chose,
                    alat_dapur: chose,
                    mck: chose,
                    sumber_air: chose,
                    daya_listrik: chose,
                    sawah: chose,
                    // luas_sawah: req,
                    kepemilikan_kendaraan: chose,
                    // jenis_kendaraan: chose,
                    ternak: chose,
                    // jenis_ternak: req,
                    // elektronik: req,
                    keluarga_beribadah: req,
                    keluarga_jumlah_makan: req,
                    pakaian_layak: req,
                    sarana_kesehatan: req,
                    siap_kerja: req,
                    shalat: req,
                    puasa: req,
                    zakat: req,
                    lingkungan_keluarga: req,
                    kebijakan_pemerintah: req,
                    indeks_rumah: req,
                    kepemilikan_harta: req,
                    pendapatan: req,
                    indeks_kepribadian: req,
                    rekomendasi_petugas: chose,
                    // ket: req,
                },
                ...element
            })
        });
    });
</script>


</body>

</html>