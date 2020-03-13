<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-warning">
                    <b>Form Ubah Data Anggota</b>
                </div>
                <div class="card-body">
                    <?php
                    $no = 1;
                    foreach ($anggota as $angg) {
                    ?>
                        <form action="<?php echo base_url(); ?>anggota/UpdateDataAnggota/<?php echo $angg->id ?>" method="post">

                            <label for="badge">Nama</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="nama" class="form-control" value="<?= $angg->nama ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="badge">Badge</label>
                                <input type="number" name="badge" class="form-control" id="badge" value="<?= $angg->badge ?>">
                                <small class="form-text text-danger"><?= form_error('badge'); ?> </small>
                            </div>
                            <div class="form-group">
                                <label for="unitkerja">Unit Kerja</label>
                                <select class="form-control" name="unitkerja" id="unitkerja">
                                    <option value="Divisi Operasi">Divisi Operasi</option>
                                    <option value="Divisi Penjualan Produk Pso">Divisi Penjualan Produk PSO</option>
                                    <option value="Divisi Teknik Sistem Informasi">Divisi Teknik & Sistem Informasi</option>
                                    <option value="Divisi Sdm">Divisi SDM</option>
                                    <option value="Divisi Sekretariat Perusahaan Tatakelola">Divisi Sekretariat Perusahaan & Tata Kelola</option>
                                    <option value="Divisi Teknologi">Divisi Teknologi</option>
                                    <option value="Divisi Penjualan Produk Komersial">Divisi Penjualan Produk Komersial</option>
                                    <option value="Divisi Pengadaan">Divisi Pengadaan</option>
                                    <option value="Divisi Umum">Divisi Umum</option>
                                    <option value="Divisi Pemeliharaan">Divisi Pemeliharaan</option>
                                    <option value="Divisi Distribusi Pemasaran">Divisi Distribusi & Pemasaran</option>
                                    <option value="Divisi Adm Keuangan">Divisi ADM Keuangan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= $angg->email ?>">
                            </div>
                            <div class="form-group">
                                <label for="nohp">No Telp</label>
                                <input type="number" name="notelp" class="form-control" id="notelp" value="<?= $angg->notelp ?>">
                            </div>
                            <!-- button submit harus di dalam form -->
                            <button type="submit" class="btn btn-primary"> Ubah Data </button>

                        </form>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>