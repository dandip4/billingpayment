<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data kegiatan</h5>
                </div>
                <div class="col card-header text-right">
                    <a href="<?= base_url('kegiatan/create'); ?>"><i class="btn btn-primary">Tambah</i></a> &nbsp;
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="example-style-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Biaya</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($kegiatan as $key => $kegiatans) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $kegiatans->kegiatan; ?></td>
                                        <td><?= $kegiatans->biaya; ?></td>
                                       
                                        <td>
                                            <div class="d-flex order-actions">
                                                <a href="<?=base_url('kegiatan/edit');?>/<?php echo $kegiatans->id ?>"><i class="btn btn-warning">Edit</i></a> &nbsp;
                                                <a onclick="return confirm('Apakah Anda akan menghapus data ini ? ');" href="<?= base_url('kegiatan/delete'); ?>/<?php echo $kegiatans->id ?>">
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