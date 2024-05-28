<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Form Edit Prodi</h5>
                </div>
                <form action="<?= base_url('prodi/update'); ?>" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="kode_prodi">Kode Prodi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" placeholder="Kode Prodi" id="kode_prodi" name="kode_prodi" value="<?php echo $querydetail->kode_prodi ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="nama_prodi">Nama Prodi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="text" placeholder="Nama Prodi" id="nama_prodi" name="nama_prodi" value="<?php echo $querydetail->nama_prodi ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="batas_pendaftaran">Batas Pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="date" placeholder="Batas Pendaftaran" id="batas_pendaftaran" name="batas_pendaftaran" value="<?php echo $querydetail->batas_pendaftaran ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="id"></label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="hidden" placeholder="id" id="id" name="id" value="<?php echo $querydetail->id ?>">
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