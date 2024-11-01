<?php $this->load->view('common/header'); ?>
<section class="section_top inner_pages">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="text_name">
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="content-panel sitemap">
                    <ul>
                        <li>
                            <a class="l0bg" style=" background-color:#687a82 !important;
                                border: 2px solid#687a82 !important;
                                color: white !important;" href="<?php echo base_url() ?>">Home
                            </a>
                            <ul>
                                <li><a class="l1bg" href="<?php echo base_url('all-products') ?>">A-Z Product</a></li>
                                <li><a class="l1bg" href="<?php echo base_url('all-category') ?>">Category</a>
                                    <ul>
                                        <?php
                                        foreach ($categories as $key => $category) {
                                            if ($category['level'] == 0) {
                                        ?>
                                                <li><a class="l2bg" href="<?php echo $category['category_url']; ?>">
                                                        <?php echo $category['name']; ?>
                                                    </a>
                                                    <ul>
                                                        <?php foreach ($category['all_children_ids'] as $allcat_subcat_id) { ?>
                                                            <li>
                                                                <a class="l1bg" href="<?php echo $categories[$allcat_subcat_id]['category_url']; ?>">
                                                                    <?php echo $categories[$allcat_subcat_id]['name']; ?>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                        <?php }
                                        } ?>
                                    </ul>
                                </li>
                                <li><a class="l1bg" href="<?php echo base_url('catalogs') ?>">Catalogs</a></li>
                                <li><a class="l1bg" href="<?php echo base_url('contact-us') ?>">Contact us</a></li>
                                <li><a class="l1bg" href="<?php echo base_url('about-us') ?>">About Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('common/footer'); ?>