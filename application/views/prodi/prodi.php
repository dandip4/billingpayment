<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Prodi</h5>
                </div>
                <div class="col card-header text-right">
                    <a href="<?= base_url('prodi/create'); ?>"><i class="btn btn-primary">Tambah</i></a> &nbsp;
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="example-style-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Prodi</th>
                                    <th>Nama Prodi</th>
                                    <th>Batas Pendaftaran</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($prodi as $key => $prodis) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $prodis->kode_prodi; ?></td>
                                        <td><?= $prodis->nama_prodi; ?></td>
                                        <td><?= $prodis->batas_pendaftaran; ?></td>

                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="<?= base_url('prodi/edit'); ?>/<?php echo $prodis->id ?>"><i class="btn btn-warning">Edit</i></a> &nbsp;
                                                <a onclick="return confirm('Apakah Anda akan menghapus data ini ? ');" href="<?= base_url('prodi/delete'); ?>/<?php echo $prodis->id ?>">
                                                    <i class="btn btn-danger">Hapus</i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>