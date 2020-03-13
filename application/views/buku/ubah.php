<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-warning">
                    <b>Ubah Data Buku</b>
                </div>
                <div class="card-body">
                    <?php
                    $no = 1;
                    foreach ($buku as $buk) {
                    ?>
                        <form action="<?php echo base_url(); ?>buku/UpdateDataBuku/<?php echo $buk->id ?>" method="post">

                            <label for="namabuku">Nama Buku</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="namabuku" class="form-control" value="<?= $buk->namabuku ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $buk->penerbit ?>">
                                <small class="form-text text-danger"><?= form_error('penerbit'); ?> </small>
                            </div>
                            <div class="form-group">
                                <label for="tahunterbit">Tahun Terbit</label>
                                <input type="text" name="tahunterbit" class="form-control" id="tahunterbit" value="<?= $buk->tahunterbit ?>">
                            </div>
                            <div class="form-group">
                                <label for="kategoribuku">Kategori Buku</label>
                                <select class="form-control" name="kategoribuku" id="kategoribuku">
                                    <option value="Karya Umum">Karya Umum</option>
                                    <option value="Filsafat">Filsafat</option>
                                    <option value="Agama">Agama</option>
                                    <option value="Ilmu Sosial">Ilmu Sosial</option>
                                    <option value="Bahasa">Bahasa</option>
                                    <option value="Ilmu Pengetahuan Murni">Ilmu Pengetahuan Murni</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Seni Olahraga Hiburan Rekreasi">Seni Olahraga Hiburan Rekreasi</option>
                                    <option value="Sastra Dan Kesusasteraan">Sastra Dan Kesusasteraan</option>
                                    <option value="Ilmu Bumi Dan Sejarah">Ilmu Bumi Dan Sejarah</option>
                                </select>
                            </div>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $buk->penulis ?>">
                </div>
                <div class="form-group">
                    <label for="cover">Cover</label>
                    <input type="file" name="cover" class="form-control" id="cover">
                    <small class="form-text text-danger"><?= form_error('cover'); ?> </small>
                </div>
                <!-- button submit harus di dalam form -->
                <button type="submit" class="btn btn-primary"> Ubah Data </button>

                </form>
            <?php } ?>
            </div>
        </div>

    </div>
</div>