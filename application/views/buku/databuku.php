<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Input Buku</h3>
                <p class="animated fadeInDown">
                    Buku <span class="fa-angle-right fa"></span> Data Buku
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
                    <?php echo form_open_multipart('buku/InsertDataBuku'); ?>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">
                            <div class="container">
                                <?php if (!empty($this->session->flashdata('flash'))) : ?>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Data Buku <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <a href="<?= base_url(); ?>buku" class="btn btn-primary">Tambah Data Buku</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cari data buku.." name="keyword">
                                                <button class="btn btn-primary" type="submit">Cari</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-10">
                                    <h3>Daftar Buku</h3>
                                    <?php if (empty($buku)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            Data buku tidak ditemukan!
                                        </div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <?php endif; ?>
                                            <ul class="list-group">
                                                <?php if (!empty($buku)) : ?>
                                                    <?php foreach ($buku as $buk) : ?>
                                                        <li class="list-group-item">
                                                            <?= $buk->namabuku ?>
                                                            <a href="<?php echo base_url() ?>buku/HapusDataBuku/<?php echo $buk->id ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin dihapus?');"> Hapus </a>
                                                            <a href="<?php echo base_url() ?>buku/Edit/<?php echo $buk->id ?>" class="badge badge-success float-right"> Ubah </a>
                                                            <a href="<?php echo base_url() ?>buku/DetailDataBuku/<?php echo $buk->id ?>" class="badge badge-primary float-right"> Detail </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                            </tbody>
                                </div>
                            </div>
                        </div>