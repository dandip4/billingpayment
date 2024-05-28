<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Form Edit Data User</h5>
                </div>
                <form action="<?= base_url('user/update'); ?>" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="nama">Nama</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Nama Lengkap" id="nama" name="nama" value="<?= $querydetail->nama ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Email" id="email" name="email" value="<?= $querydetail->email ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Biarkan kosong jika tidak diganti" id="password" name="password">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="password">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="password" placeholder="Confirm Password baru jika password di ganti" id="password" name="confirm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="no_hp">Nomor Telephone</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" placeholder="Nomor Telephone" id="no_hp" name="no_hp" value="<?= $querydetail->no_hp ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="jk">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jk" id="jk" class="form-control">
                                            <option value="" disabled>---Jenis Kelamin---</option>
                                            <option value="Laki-laki" <?= ($querydetail->jk == 'Laki-laki') ? 'selected' : ''; ?>>Laki - Laki</option>
                                            <option value="Perempuan" <?= ($querydetail->jk == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="level">Level</label>
                                    <div class="col-sm-9">
                                        <select name="level" id="level" class="form-control">
                                            <option value="" disabled>---Level---</option>
                                            <option value="Admin" <?= ($querydetail->level == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                                            <option value="User" <?= ($querydetail->level == 'User') ? 'selected' : ''; ?>>User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="id"></label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="hidden" placeholder="id" id="id" name="id" value="<?= $querydetail->id ?>">
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