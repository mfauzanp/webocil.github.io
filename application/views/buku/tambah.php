<!-- start: Content -->
<div id="content">
  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
        <h3 class="animated fadeInLeft">Input Buku</h3>
        <p class="animated fadeInDown">
          Buku <span class="fa-angle-right fa"></span> Tambah Buku
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
              <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Buku</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="namabuku"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Penerbit</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="penerbit"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Tahun Terbit</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="tahunterbit"></div>
              </div>
              <div class="form-group">
                <label for="kategoribuku" class="col-sm-2 control-label text-right">Kategori Buku</label>
                <div class="col-sm-10"><select class="form-control" name="kategoribuku" id="kategoribuku">
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
                  </select></div><br>
              </div><br>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Penulis</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="penulis"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Deskripsi Buku</label>
                <div class="col-sm-10"><input type="textarea" class="form-control" name="deskbuku"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Cover</label>
                <div class="col-sm-10"><input type="file" class="form-control" name="cover"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">File Buku</label>
                <div class="col-sm-10"><input type="file" class="form-control" name="filebuku"></div>
              </div>
            </div><!-- /input-group -->
            <br>
          </div>
          <div class="col-sm-6 mr-md-3 ">
            <button type="submit" class="btn ripple btn-3d btn-success">
              <div>
                <span>Submit</span>
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end: content -->