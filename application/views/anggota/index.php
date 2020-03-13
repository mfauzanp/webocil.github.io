<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Input Anggota</h3>
                <p class="animated fadeInDown">
                    Anggota <span class="fa-angle-right fa"></span> Tambah Anggota
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-12">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Insert Data</h4>
                    </div>
                    <?php echo form_open_multipart('anggota/InsertDataAnggota'); ?>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">

                            <div class="container">
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"> </div>
                                <?php if (!empty($this->session->flashdata('flash'))) : ?>
                                    <!-- <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data Anggota <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div> -->
                                <?php endif; ?>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <a href="<?= base_url(); ?>anggota/tambah" class="btn btn-primary">Tambah Data Anggota</a>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cari data anggota..." name="keyword">
                                                <button class="btn btn-primary" type="submit">Cari</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h3>Daftar Anggota</h3>
                                        <?php if (empty($anggota)) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                Data anggota tidak ditemukan!
                                            </div>
                                        <?php endif; ?>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($anggota as $angg) : ?>
                                                    <tr>
                                                        <td><?= $angg->nama ?></td>
                                                        <td><a href="<?php echo base_url() ?>anggota/HapusDataAnggota/<?php echo $angg->id ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin dihapus?');"> Hapus </a>
                                                            <a href="<?php echo base_url() ?>anggota/Edit/<?php echo $angg->id ?>" class="badge badge-success float-right"> Ubah </a>
                                                            <a href="<?php echo base_url() ?>anggota/detail/<?php echo $angg->id ?>" class="badge badge-primary float-right"> Detail </a></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>