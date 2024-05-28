<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Simple Form Wizard</h5><span>Please Make sure fill all the filed before click on next button</span>
        </div>
        <div class="card-body">
          <form class="form-wizard" id="regForm" action="<?= base_url('/pendaftaran/daftar') ?>" method="POST">
            <fieldset class="mb-3">
              <div class="tab">
                <div class="col-sm-9">
                  <?php foreach ($kegiatan as $key => $value) : ?>
                    <label class="form-check-label col-12" for="input-<?php echo $key; ?>">
                    </label>
                    <input class="form-check-input" id="input-<?php echo $key; ?>" type="checkbox" name="kegiatan[]" value="<?php echo $value->id ?>">

                    <?php echo $value->kegiatan; ?>

                    <div class='pull-right'>Rp. <?php echo number_format($value->biaya, 0, ',', '.'); ?></div>
                    <br>
                  <?php endforeach; ?>
                </div>
            </fieldset>
            <div>
              <div class="text-end btn-mb">
                <button class="btn btn-primary" id="nextBtn" type="submit">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>