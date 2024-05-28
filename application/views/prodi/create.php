<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Form Tambah Data Program Studi</h5>
                </div>
                <form action="<?= base_url('prodi/store'); ?>" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="kode_prodi">Kode Prodi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" placeholder="Kode Prodi" id="kode_prodi" name="kode_prodi">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="nama_prodi">Nama Prodi</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="text" placeholder="Nama Prodi" id="nama_prodi" name="nama_prodi">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="batas_pendaftaran">Batas Pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input class="form-control digits" type="date" placeholder="Batas Pendaftran" id="batas_pendaftaran" name="batas_pendaftaran">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="card-footer text-end">
                <div class="col-sm-9 offset-sm-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <!-- <input class="btn btn-light" type="reset" value="Cancel"> -->
                    <a href="<?= base_url('prodi/index'); ?>" class="btn btn-light">Cancel</a>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>