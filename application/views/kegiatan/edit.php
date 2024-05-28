<div class="container-fluid">
     <div class="row">
         <div class="col-sm-12">
             <div class="card">
                 <div class="card-header pb-0">
                     <h5>Kegiatan</h5>
                 </div>
                 <form action="<?=base_url('kegiatan/update');?>" method="post">
                     <div class="card-body">
                         <div class="row">
                             <div class="col">
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="kegiatan">kegiatan </label>
                                     <div class="col-sm-9">
                                         <input class="form-control" type="text" placeholder="kegiatan Lengkap" id="kegiatan" name="kegiatan"
                                         value="<?php echo $querydetail->kegiatan ?>">
                                     </div>
                                 </div>
                                
                                 
                                 
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="biaya">Biaya</label>
                                     <div class="col-sm-9">
                                         <input class="form-control digits" type="number" placeholder="Biaya" id="biaya" name="biaya"
                                         value="<?php echo $querydetail->biaya ?>">
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="id"></label>
                                     <div class="col-sm-9">
                                         <input class="form-control digits" type="hidden" placeholder="id" id="id" name="id"
                                         value="<?php echo $querydetail->id ?>">
                                     </div>
                                 </div>
                                 

                             </div>
                         </div>
                     </div>
                     <div class="card-footer text-end">
                         <div class="col-sm-9 offset-sm-3">
                             <button class="btn btn-primary" type="submit">Submit</button>
                             <!-- <input class="btn btn-light" type="reset" value="Cancel"> -->
                             <a href="<?= base_url('welcome/index'); ?>" class="btn btn-light">Cancel</a>
                         </div>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>