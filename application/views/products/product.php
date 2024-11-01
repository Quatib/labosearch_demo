<?php $this->load->view('common/header'); ?>
<section class="section_top inner_pages">
    <div class="container ">
        <div class="row  justify-content-center ">
            <div class="col-md-9">
                <h1 class="page_haeding">All Products</h1>
                <p class="inner_decr">Dive into our extensive products, where you'll find a wide range of laboratory
                    essentials, including state-of-the-art analytical instruments, labware, biotechnology equipment,
                    safety solutions, and ergonomic lab furniture.
                </p>
            </div>
        </div>
        <div class="all_product_gired  bg_color">
            <?php foreach ($categories as $category) {
                $cat_image = json_decode($category['image_url']);
                if (empty($cat_image->small)) {
                    $cat_image = base_url('assets/images/no_photo.png');
                } else {
                    $cat_image = base_url($cat_image->medium);
                }
            ?>
                <div class=" inner_all">
                    <div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <a href="<?php echo $category['category_url']; ?>">
                                    <img class="  w-100 h-100 bg-light p-3" src="<?php echo $cat_image; ?>" style="object-fit: cover;" alt='<?php echo $category[' name']; ?>'>
                                </a>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="head_all mt-5 mb-3 pt-5">
                                    <a href="<?php echo $category['category_url']; ?>"><?php echo $category['name']; ?></a>
                                </h5>
                                <?php if (!empty($category['all_children_ids'])) { ?>
                                    <div class="Sub-cateroy">
                                        <?php foreach ($category['all_children_ids'] as $subcategory) { ?>
                                            <h5>
                                                <a href="<?php echo $categories[$subcategory]['category_url']; ?>">
                                                    <?php echo $categories[$subcategory]['name']; ?>
                                                </a>
                                            </h5>
                                            <ul class="li_texttt">
                                                <?php foreach ($products as $product) {
                                                    $product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
                                                    if ($product['category_id'] == $subcategory || $product['category_id'] == $category['id']) { ?>
                                                        <li class="sub_item">
                                                            <a href="<?php echo $product_url; ?>"><?php echo $product['name']; ?></a>
                                                        </li>
                                                <?php }
                                                }  ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                <?php } else { ?>
                                    <ul class="li_texttt">
                                        <?php foreach ($products as $product) {
                                            $product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
                                            if ($product['category_id'] == $category['id']) {
                                        ?>
                                                <li>
                                                    <a href="<?php echo $product_url; ?>" class="text_all_inner">
                                                        <i class="fa fa-angle-double-right me-2"></i>
                                                        <?php echo $product['name']; ?>
                                                    </a>
                                                </li>
                                        <?php }
                                        } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php $this->load->view('common/footer'); ?>