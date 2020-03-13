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
              <div class="form-group"><label class="col-sm-2 control-label text-right">Nama </label>
                <div class="col-sm-10"><input type="text" class="form-control" name="nama"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Badge</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="badge" id="badge"></div>
                <small class="form-text text-danger"><?= form_error('badge'); ?></small>
              </div>
              <div class="form-group">
                <label for="unitkerja" class="col-sm-2 control-label text-right">Unit Kerja</label>
                <div class="col-sm-10"><select class="form-control" name="unitkerja" id="unitkerja">
                    <option value="Divisi Operasi">Divisi Operasi</option>
                    <option value="Divisi Penjualan Produk PSO">Divisi Penjualan Produk PSO</option>
                    <option value="Divisi Teknik Sistem Informasi">Divisi Teknik & Sistem Informasi</option>
                    <option value="Divisi SDM">Divisi SDM</option>
                    <option value="Divisi Sekretariat Perusahaan Tata Kelola">Divisi Sekretariat Perusahaan & Tata Kelola</option>
                    <option value="Divisi Penjualan Produk Komersial">Divisi Penjualan Produk Komersial</option>
                    <option value="Divisi Pengadaan">Divisi Pengadaan</option>
                    <option value="Divisi Umum">Divisi Umum</option>
                    <option value="Divisi Pemeliharaan">Divisi Pemeliharaan</option>
                    <option value="Divisi Distribusi Pemasaran">Divisi Distribusi & Pemasaran</option>
                    <option value="Divisi ADM Keuangan">Divisi ADM Keuangan</option>
                  </select></div><br>
              </div><br>
              <div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
                <div class="col-sm-10"><input type="email" class="form-control" name="email" id="email"></div>
              </div>
              <div class="form-group"><label class="col-sm-2 control-label text-right">No Telp</label>
                <div class="col-sm-10"><input type="number" class="form-control" name="notelp" id="notelp"></div>
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