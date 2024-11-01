<?php $this->load->view('common/header'); ?>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.2.621/styles/kendo.material.mobile.min.css" />
<script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.2.621/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
<script type="x/kendo-template" id="page-template">
    <div class="page-template my-content"></div>
</script>
<section class="section_top inner_pages">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="download_box mx-auto">
                    <button class=" download_btnn" onclick="ExportPdf()"> <i class="fa fa-download me-1"></i> Download Catalog</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_daetils" id="myCanvas">
                    <div class="img_bg col-lg-12">
                        <div class="img_section_logo">
                            <div class="img_left"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo" class="logo_single"></div>
                        </div>
                        <div class="img_product_single">
                            <img src=" <?php echo base_url() . 'assets/resources/images/products/' . $product['sku'] . '.png'; ?>" class="single_img" alt="<?php echo $product['sku']; ?>">
                        </div>
                        <div class="text_single_page">
                            <p class="catalog_head"><?php echo chop($product['name'], $product['sku']); ?><br><?= $product['sku'] ?></p>
                        </div>
                        <div class="cate_cont">
                            <p class="catalog_contact"> Website:
                                <a href="<?php echo base_url() ?>" style="text-decoration: none;color: #31444a;"> www.labosearch.com</a>
                            </p>
                            <p class="catalog_contact"> Email:
                                <a href="mailto:info@labosearch.com" style="text-decoration: none;color: #31444a;"> info@labosearch.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="text_cate_single">
                        <h5 class="catalog_subhead ">Overview</h5>
                        <p class="catalog_text" style="text-align: justify;"><?php echo $product['description']; ?></p>
                    </div>
                    <div class="text_cate_single">
                        <h5 class="catalog_subhead" style="list-style-type:none;"> Features </h5>
                        <ul>
                            <?php foreach ($product['features'] as $fkey) { ?>
                                <li class="catalog_text"><?php echo $fkey; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="cate_table_single table-responsive">
                        <h5 class="catalog_subhead"> Specifications </h5>
                        <?php if ($product['specifications']) {
                            $specification = json_decode($product['specifications'], true); ?>
                            <table class="text-center w-100 mt-1">
                                <tbody>
                                    <?php foreach ($specification as $parameter => $value) {
                                        if (!empty($value)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $parameter; ?></td>
                                                <td>
                                                    <?php if (is_array($value)) {
                                                        echo "<table>";
                                                        foreach ($value as $key => $value1) {
                                                    ?>
                                            <tr>
                                                <td>
                                                    <?php echo $key ?>
                                                </td>
                                                <td>
                                                    <?php echo $value1 ?>
                                                </td>
                                            </tr>
                                    <?php }
                                                        echo "</table>";
                                                    } else {
                                                        echo $value;
                                                    } ?>
                                    </td>
                                    </tr>
                            <?php }
                                    } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                    <div class="text_cate_single">
                        <h5 class="catalog_subhead">Applications</h5>
                        <?php foreach ($product['applications'] as $app) { ?>
                            <p class="catalog_text" style="text-align: justify;"><?php echo $app; ?></p>
                        <?php } ?>
                    </div>
                    <div class="text-center text_cate_single">
                        <img src="<?php echo base_url() ?>assets/images/logo.png" class="catalog_footerlog mb-2" alt="Logo">
                        <ul class="mobile_bottom">
                            <li>Labosearch.Inc 360 Bloomfield Avenue, Windsor CT, 06095, USA.</li>
                            <li>Email: <a href="mailto:info@labosearch.com">info@labosearch.com</a> |
                                <a style="text-decoration: none;" href="<?php echo base_url() ?>"> Website: www.labosearch.com</a>
                                <br>Phone: +1 438 901 2321
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    kendo.pdf.defineFont({
        "DejaVu Sans": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
        "DejaVu Sans|Bold": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
        "DejaVu Sans|Bold|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
        "DejaVu Sans|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
        "WebComponentsIcons": "https://kendo.cdn.telerik.com/2017.1.223/styles/fonts/glyphs/WebComponentsIcons.ttf"
    });

    function ExportPdf() {
        kendo.drawing
            .drawDOM("#myCanvas", {
                forcePageBreak: ".page-break",
                paperSize: "A4",
                template: $("#page-template").html(),
                keepTogether: ".prevent-split"
            }).then(function(group) {
                kendo.drawing.pdf.saveAs(group, "<?= str_replace(" ", "-", $product['name']) ?>.pdf")
            });
    }
</script>
<?php $this->load->view('common/footer'); ?>