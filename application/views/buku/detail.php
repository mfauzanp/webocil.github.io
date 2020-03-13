 <!-- start: Content -->
 <div id="content">
   <div class="panel box-shadow-none content-header">
     <div class="panel-body">
       <div class="col-md-6">
         <h3 class="animated fadeInLeft">Daftar Buku</h3>
         <p class="animated fadeInDown">
           Pages <span class="fa-angle-right fa"></span> Buku
         </p>
       </div>
     </div>
   </div>
   <div class="container">
     <div class="row">
       <div class="">
         <?php
          $no = 1;
          foreach ($buku as $p) {
          ?>
           <div class="col-sm-5 col-md-3 product-grid">
             <div class="card">
               <div class="card-body">
                 <div class="thumbnail">
                   <img src="<?php echo base_url("./uploads/" . $p->cover) ?>" alt="">
                   <div class="caption">
                     <?php echo $p->kategoribuku ?>
                     <small class="pull-right">
                       <span class="rate fa-star fa"></span>
                       <span class="rate fa-star fa"></span>
                       <span class="rate fa-star fa"></span>
                       <span class="rate fa-star fa"></span>
                       <span class="rate fa-star fa"></span>
                     </small>
                     <h4><?php echo $p->namabuku ?></h4>
                     <h5><?php echo $p->penerbit ?></h5>
                     <p>Deskripsi Buku</p>
                     <h5><?php echo $p->deskbuku ?></h5>
                     <p><a target="_top" href="<?= base_url('buku/detail/' . $p->id) ?>" class="btn btn-danger" role="button">Read</a></p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         <?php } ?>
       </div>
     </div>
   </div>
 </div>
 </div>
 </div>
 <!-- end: content -->