<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Detail Anggota</h3>
                <p class="animated fadeInDown">
                    Anggota <span class="fa-angle-right fa"></span> Detail
                </p>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-12">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Data</h4>
                    </div>
                    <div class="container">
                        <row class="mt-3">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Detail Data Anggota
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $anggota['nama'] ?></h5>
                                        <h4 class="card-subtitle mb-2 text-muted"><?= $anggota['badge']; ?> </h4>
                                        <p class="card-text"><?= $anggota['unitkerja']; ?></p>
                                        <p class="card-text"><?= $anggota['email']; ?></p>
                                        <p class="card-text"><?= $anggota['notelp']; ?></p>
                                        <a href="<?= base_url('anggota'); ?>" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </row>
                    </div>