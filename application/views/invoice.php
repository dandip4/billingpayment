<ul>
    <li>id prodi: <?= $detail_invoice['id_prodi'] ?></li>
    <li>id kegiatan: <ul>
            <?php foreach (json_decode($detail_invoice['id_kegiatan']) as $id_kegiatan) : ?>
                <li><?php echo $id_kegiatan ?></li>
            <?php endforeach; ?>
        </ul>
    </li>
    <li>nama kegiatan: <ul>
            <?php foreach ($detail_invoice['nama_kegiatan'] as $nama_kegiatan) : ?>
                <li><?php echo $nama_kegiatan ?></li>
            <?php endforeach; ?>
        </ul>
    </li>
    <li>id user: <?= $detail_invoice['id_user'] ?></li>
    <li>total: Rp. <?= number_format($detail_invoice['total'], 0, ',', '.') ?></li>
</ul>

<div class="container invoice">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div>
                            <div class="row invo-header">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="media-left"><a href="index.html"><img class="media-object img-60" src="../assets/images/logo/logo-1.png" alt=""></a></div>
                                        <div class="media-body m-l-20">
                                            <h4 class="media-heading f-w-600">Viho</h4>
                                            <p>hello@viho.in<br><span class="digits">289-335-6503</span></p>
                                        </div>
                                    </div>
                                    <!-- End Info-->
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-md-end text-xs-center">
                                        <h3>Invoice #<span class="digits counter">1069</span></h3>
                                        <p>Issued: May<span class="digits"> 27, 2015</span><br> Payment Due: June <span class="digits">27, 2015</span></p>
                                    </div>
                                    <!-- End Title                                 -->
                                </div>
                            </div>
                        </div>
                        <!-- End InvoiceTop-->
                        <div class="row invo-profile">
                            <div class="col-xl-4">
                                <div class="media">
                                    <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                                    <div class="media-body m-l-20">
                                        <h4 class="media-heading f-w-600">Johan Deo</h4>
                                        <p>JohanDeo@gmail.com<br><span class="digits">555-555-5555</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="text-xl-end" id="project">
                                    <h6>Project Description</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Invoice Mid-->
                        <div>
                            <div class="table-responsive invoice-table" id="table">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="item">
                                                <h6 class="p-2 mb-0">Item Description</h6>
                                            </td>
                                            <td class="Hours">
                                                <h6 class="p-2 mb-0">Hours</h6>
                                            </td>
                                            <td class="Rate">
                                                <h6 class="p-2 mb-0">Rate</h6>
                                            </td>
                                            <td class="subtotal">
                                                <h6 class="p-2 mb-0">Sub-total</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Lorem Ipsum</label>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">5</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$75</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$375.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Lorem Ipsum</label>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">3</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$75</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$225.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Lorem Ipsum</label>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">10</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$75</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$750.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Lorem Ipsum</label>
                                                <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">10</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$75</p>
                                            </td>
                                            <td>
                                                <p class="itemtext digits">$750.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="itemtext"></p>
                                            </td>
                                            <td>
                                                <p class="m-0">HST</p>
                                            </td>
                                            <td>
                                                <p class="m-0 digits">13%</p>
                                            </td>
                                            <td>
                                                <p class="m-0 digits">$419.25</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="Rate">
                                                <h6 class="mb-0 p-2">Total</h6>
                                            </td>
                                            <td class="payment digits">
                                                <h6 class="mb-0 p-2">$3,644.25</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table-->
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <div>
                                        <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <form class="text-end invo-pal">
                                        <input type="image" src="../assets/images/other-images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End InvoiceBot-->
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                        <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">Print</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                    <!-- End Invoice-->
                    <!-- End Invoice Holder-->
                </div>
            </div>
        </div>
    </div>
</div>