<?php $this->load->view('common/header'); ?>
<section class="section_top inner_pages">
    <div class="container">
        <div class="row  justify-content-center ">
            <div class="col-md-9">
                <h1 class="page_haeding">Our Product Category</h1>
                <p class="inner_decr">Dive into our extensive products, where you'll find a wide range of laboratory
                    essentials, including state-of-the-art analytical instruments, labware, biotechnology equipment,
                    safety solutions, and ergonomic lab furniture.
                </p>
            </div>
        </div>
        <div class="grid-cate">
            <?php foreach ($categories as $category) {
                $rcatimage = json_decode($categories[$category['id']]['image_url']);
                if (empty($rcatimage->small)) {
                    $rcatimage = base_url('assets/images/no_photo.png');
                } else {
                    $rcatimage = base_url($rcatimage->small);
                }
            ?>
                <div class=" gridd ">
                    <div class="product_grid">
                        <div class="content">
                            <div class="col-lg-12 cate_inner_div">
                                <a href="<?php echo $category['category_url']; ?>" class="cate_inner_text">
                                    <?php echo $category['name']; ?>
                                </a>
                            </div>
                            <div class="cate_caption">
                                <div class="cattt-sub">
                                    <div class="cate_img_section">
                                        <a href="<?php echo $category['category_url']; ?>">
                                            <img src="<?php echo $rcatimage; ?>" alt="<?php echo $category['name']; ?>">
                                        </a>
                                    </div>
                                    <ul class="cate_luu">
                                        <?php $i = 1;
                                        foreach ($category['all_children_ids'] as $subcategory) {
                                            if ($i <= 5) {
                                        ?>
                                                <li>
                                                    <a href="<?php echo $categories[$subcategory]['category_url']; ?>" class="list-group-product_grid">
                                                        <i class="fa fa-angle-double-right me-2"></i>
                                                        <?php echo $categories[$subcategory]['name']; ?>
                                                    </a>
                                                </li>
                                        <?php $i++;
                                            }
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php $this->load->view('common/footer'); ?>