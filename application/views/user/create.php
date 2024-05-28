 <div class="container-fluid">
     <div class="row">
         <div class="col-sm-12">
             <div class="card">
                 <div class="card-header pb-0">
                     <h5>User</h5>
                 </div>
                 <form class="form theme-form" method="post" action="<?= base_url('user/store'); ?>">
                     <div class="card-body">
                         <div class="row">
                             <div class="col">
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="nama">Nama Lengkap</label>
                                     <div class="col-sm-9">
                                         <input class="form-control" type="text" placeholder="Nama Lengkap" id="nama" name="nama" value="<?= set_value('nama') ?>">
                                         <?= form_error('nama') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="email">Email</label>
                                     <div class="col-sm-9">
                                         <input class="form-control" type="text" placeholder="example@gmail.com" id="email" name="email" value="<?= set_value('email') ?>">
                                         <?= form_error('email') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="password">Password</label>
                                     <div class="col-sm-9">
                                         <input class="form-control" type="password" placeholder="Password" id="password" name="password">
                                         <?= form_error('password') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="password">Confirm Password</label>
                                     <div class="col-sm-9">
                                         <input class="form-control" type="password" placeholder="Confirm Password" id="password" name="confirm">
                                         <?= form_error('confirm') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="no_hp">Nomor Telephone</label>
                                     <div class="col-sm-9">
                                         <input class="form-control digits" type="number" placeholder="Nomor Telephone" id="no_hp" name="no_hp" value="<?= set_value('no_hp') ?>">
                                         <?= form_error('no_hp') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="jk">Jenis Kelamin</label>
                                     <div class="col-sm-9">
                                         <select name="jk" id="jk" class="form-control">
                                             <option value="" disabled selected>--- Jenis Kelamin ---</option>
                                             <option value="Laki-laki" value="Laki-laki" <?= set_value('jk') == 'Laki-laki' ? 'seleceted' : null ?>>Laki-Laki</option>
                                             <option value="Perempuan" <?= set_value('jk') == 'Perempuan' ? 'seleceted' : null ?>>Perempuan</option>
                                         </select>
                                         <?= form_error('jk') ?>
                                     </div>
                                 </div>
                                 <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label" for="level">Level</label>
                                     <div class="col-sm-9">
                                         <select name="level" id="level" class="form-control" value="<?= set_value('level') ?>">
                                             <option value="" disabled selected>--- Level ---</option>
                                             <option value="Admin">Admin</option>
                                             <option value="User">User</option>
                                         </select>
                                         <?= form_error('level') ?>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="card-footer text-end">
                         <div class="col-sm-9 offset-sm-3">
                             <button class="btn btn-primary" type="submit">Submit</button>
                             <!-- <input class="btn btn-light" type="reset" value="Cancel"> -->
                             <a href="<?= base_url('user/index'); ?>" class="btn btn-light">Cancel</a>
                         </div>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 </div>