<?php $this->load->view('common/header'); ?>
<?php
if (!empty($this->session->flashdata('pd_quote_success'))) {
    echo "<div class='row'>";
    echo "<div class='alert alert-success contact_msg' id='error_delay_fade'>";
    echo $this->session->flashdata('pd_quote_success');
    echo "</div>";
    echo "</div>";
} else if (!empty($this->session->flashdata('pd_quote_error'))) {
    echo "<div class='row'>";
    echo "<div class='alert alert-danger contact_msg' id='error_delay_fade'>";
    echo $this->session->flashdata('pd_quote_error');
    echo "</div>";
    echo "</div>";
} else if (!empty($this->session->flashdata('pd_quote_not_submitted'))) {
    echo "<div class='row'>";
    echo "<div class='alert alert-danger contact_msg' id='error_delay_fade'>";
    echo $this->session->flashdata('pd_quote_not_submitted');
    echo "</div>";
    echo "</div>";
}
$product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
$product_image = json_decode($product['image_url']);
if (empty($product_image->medium)) {
    $product_image = base_url() . "assets/images/no_photo.png";
} else {
    $product_image = base_url($product_image->medium);
}
$user_role = $this->session->userdata('role');
?>
<section class="section_top inner_pages">
    <div class="container product_d_inner">
        <div class="row">
            <div class="col-lg-2 col-md-4 det_center">
                <a href="<?php echo $product_url; ?>">
                    <img src="<?php echo $product_image; ?>" alt="<?php echo $product['name']; ?>" class="details_img">
                </a>
            </div>
            <div class="col-lg-10 col-md-8">
                <h1 class="details_haed">
                    <a href="<?php echo $product_url; ?>"><?php echo $product['name']; ?></a>
                </h1>
                <div class="product-details-tab">
                    <div class="product_desc">
                        <p class="text_dext">
                            <?php echo $product['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 de_inner">
                <div class="col-12 ">
                    <h3 class="details_haed_inner">Specification</h3>
                    <div class="product_d_table feat_section table-responsive">
                        <?php if ($product['specifications']) {
                            $specification = json_decode($product['specifications'], true); ?>
                            <form action="#">
                                <table>
                                    <tbody>
                                        <?php $count = 1;
                                        foreach ($specification as $parameter => $value) {
                                            if (!empty($value)) {
                                        ?>
                                                <tr>
                                                    <td class="first_child">
                                                        <?php echo $parameter; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (is_array($value)) {
                                                            echo "<table>";
                                                            foreach ($value as $key => $value1) { ?>
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
                                <?php $count++;
                                            }
                                        } ?>
                                    </tbody>
                                </table>
                            </form>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-12">
                    <h3 class="details_haed_inner">Features</h3>
                    <div class="product_d_table feat_section">
                        <ul>
                            <?php foreach ($product['features'] as $fkey) { ?>
                                <li class="Features_text_ineer">
                                    <i class="fa fa-angle-double-right me-1"></i><?php echo $fkey; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="details_haed_inner">Applications</h3>
                    <?php foreach ($product['applications'] as $app) { ?>
                        <p class="text_dext">
                            <?php echo $app; ?>
                        </p>
                    <?php }  ?>
                </div>
                <div class="col-lg-12">
                    <h3 class="details_haed_inner">Download Catalog</h3>
                    <button type="button" class="btn modal_btnn">
                        <?php if ($product['catalog_url'] != '' && file_exists($product['catalog_url'])) { ?>
                            <a href="<?php echo base_url() . $product['catalog_url'] ?>" title="">
                                <h4 class="" title="">
                                    <strong class="text_down">
                                        <?php echo $product['name']; ?>
                                    </strong>
                                    <i class="fa fa-download" style="font-size:20px;color: #5e5e5e; margin-left: 20px;"></i>
                                </h4>
                            </a>
                        <?php } else {  ?>
                            <a href="<?php echo base_url('catalog/') . $product['sku'] ?>" title="">
                                <h4 class="" title="">
                                    <strong class="text_down">
                                        <?php echo $product['name']; ?>
                                    </strong>
                                    <i class="fa fa-download" style="font-size:20px;color: #5e5e5e; margin-left: 20px;"></i>
                                </h4>
                            </a>
                        <?php } ?>
                    </button>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <h4 class="get_head">Reach Us for Any Inquiries </h4>
                        <div class="container-block form-wrapper">
                            <form action="<?php echo $product_url ?>" method="POST">
                                <div class="responsive-container-block">
                                    <div class="col-12 get_top">
                                        <p><input class="input form-controll" placeholder="Name" name="name"></p>
                                        <span class="err_message">
                                            <?php echo form_error('name'); ?>
                                        </span>
                                    </div>
                                    <div class="col-12 get_top">
                                        <p> <input class="input form-controll" placeholder="Email" name="email"></p>
                                        <span class="err_message">
                                            <?php echo form_error('email'); ?>
                                        </span>
                                    </div>
                                    <div class="col-12 get_top">
                                        <p>
                                            <input class="input form-controll" placeholder="Product Name" name="product" value="<?php echo $product['name']; ?>" readonly="readonly">
                                        </p>
                                        <span class="err_message">
                                            <?php echo form_error('product'); ?>
                                        </span>
                                    </div>
                                    <div class="col-12 get_top">
                                        <p><textarea class="textinput form-controll" name="message" placeholder="Message"></textarea></p>
                                        <span class="err_message">
                                            <?php echo form_error('message'); ?>
                                        </span>
                                    </div>
                                </div>
                                <?php echo captcha_common_html(3); ?>
                                <div class="btn-wrapper">
                                    <button id="send_quote" class="submit-btn">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <h3 class="rel_text">Related products</h3>
            <div class='col-12'>
                <div class='product_carousel product_column5 owl-carousel'>
                    <?php
                    $count = 1;
                    foreach ($related_products as $relatedProduct) {
                        $rimage = json_decode($relatedProduct['image_url']);
                        $rproduct_url = base_url() . strtolower($categories[$relatedProduct['category_id']]['url_title']) . "/" . strtolower($relatedProduct['sku']);
                        if (empty($rimage->small)) {
                            $rimage = base_url('assets/images/no_photo.jpg');
                        } else {
                            $rimage = base_url($rimage->small);
                        }
                    ?>
                        <div class='single_product'>
                            <div class='product_thumb'>
                                <a class='primary_img' href='<?php echo $rproduct_url ?>'>
                                    <img src='<?php echo $rimage ?>' alt='<?php echo $relatedProduct[' name']; ?>' class='primary_img_product'>
                                </a>
                            </div>
                            <div class='product_name'>
                                <h6><a href='<?php echo $rproduct_url ?>'>
                                        <?php echo $relatedProduct['name']; ?>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var correctCaptcha3 = function(response) {
        if (response.length == 0) {
            alert('Please verify captcha');
        } else {
            document.getElementById("send_quote").removeAttribute("disabled");
        }
    }
</script>
<?php $this->load->view('common/footer'); ?>