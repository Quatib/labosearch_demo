<section class="section_top inner_pages">
    <div class="container">
        <div class='main-head'>
            <h1>Search:- <?php if (isset($search_key)) {
                                echo $search_key;
                            } ?></h1>
        </div>
        <div class="row">
            <?php if (isset($searched_products)) {
                if (empty($searched_products)) { ?>
                    <h3>No results found</h3><br><br>
                <?php }
                foreach ($searched_products as $sproduct) {
                    $spimage = json_decode($sproduct['image_url']);
                    if (empty($spimage->small)) {
                        $spimage = base_url('assets/images/no_photo.png');
                    } else {
                        $spimage = base_url($spimage->small);
                    }
                    $sproduct_url = base_url() . strtolower($categories[$sproduct['category_id']]['url_title']) . "/" . strtolower($sproduct['sku']);
                ?>
                    <div class="col-lg-3 sech_item">
                        <a href="<?php echo $sproduct_url ?>"><img src="<?php echo $spimage ?>" alt="<?php echo $sproduct['name']; ?>" class="img_serach"></a>
                        <p><a href="<?php echo $sproduct_url ?>"><?php echo $sproduct['name']; ?></a></p>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<?php $this->load->view('common/footer'); ?>