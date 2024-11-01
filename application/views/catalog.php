<?php $this->load->view('common/header'); ?>
<section class="section_top inner_pages">
    <div class="container">
        <div class="row  justify-content-center ">
            <div class="col-md-9">
                <h1 class="page_haeding">Our Product Catalogs</h1>
                <p class="inner_decr">Dive into our extensive products, where you'll find a wide range of laboratory
                    essentials, including
                    state-of-the-art analytical instruments, labware, biotechnology equipment, safety solutions, and
                    ergonomic lab furniture.</p>
            </div>
        </div>
        <div class="row">
            <div class="modal modal_box fade" id="catalogModal" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modal_box">
                        <div class="modal-header catalog_modal_header">
                            <h5 class="modal-title" style="color:#000">Download Catalogs</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mt-2 mb-3" >
                            <div class="row" id="addcards">
                                <div class="col-lg-12 modal_setion_btng" >
                                    <button class="btn download_btn" >
                                        <!-- <a class="download_btns" href="single_catalogs.php" target="_blank">
                                            Ion Hematology Analyzer EZL-HA101
                                        </a> -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row">
                    <div class="gird_catalogs">
                        <?php foreach ($categories as $allcatalog_category) {
                            if ($allcatalog_category['level'] == 0 and !empty($allcatalog_category['all_children_ids'])) {
                        ?>    
                            <div class="gird_catalogs_item">
                                <div class="flex_sub_text">
                                    <div class="cate_head">
                                        <p class="titile_cf"><?php echo $allcatalog_category['name']; ?></p>
                                    </div>
                                </div>
                                <ul class="catelogs_item">
                                    <?php foreach ($allcatalog_category['all_children_ids'] as $allcat_subcat_id) { ?>
                                        <li class="cate_single_item">
                                            <p class="cate_p_box text_decoration" data-bs-toggle="modal" data-bs-target="#catalogModal" style="cursor: pointer;" 
                                            onclick="getproducts_cat(<?php echo $allcat_subcat_id; ?>,
                                            '<?php echo $categories[$allcat_subcat_id]['name']; ?>',
                                                    '<?php echo base_url() ?>')">
                                                <i class="fa fa-file-pdf-o me-1"></i><?php echo $categories[$allcat_subcat_id]['name']; ?>
                                            </p>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function getproducts_cat(id, name, base_url) {
        //alert(namespace)
        // alert(name);return;
        $("#exampleModalLabel1").empty();
        $("#addcards").empty();
        var cards;
        var data = {
            'id': id
        };
        ajaxurl = base_url + "getproducts_cat";
        $.ajax({
            data: data,
            url: ajaxurl,
            type: "POST",
            dataType: "json",
            success: function(result) {
                // alert(JSON.stringify(result));return;
                $("#exampleModalLabel1").html(name);
                var i;
                for (i = 0; i < result.length; i++) {
                    var res = false;
                    if (result[i]['catalog_url'] != '') {
                        res = checkFileExist(base_url + result[i]['catalog_url']);
                    }
                    if (res == true) {

                        cards = "<a class='download_btns' href='" + base_url + "catalog/" + result[i]['sku'] + "' > " + result[i]['name'] + " </a>";
                    } else {
                        cards = "<a  class='download_btns' href='" + base_url + "catalog/" + result[i]['sku'] + "' >" + result[i]['name'] + " </a>";
                    }
                    // alert(cards)
                    $("#addcards").append(cards);
                }
            },
            error: function(error) {
                alert("ERROR: " + JSON.stringify(error));
            }
        });
    }

    function checkFileExist(urlToFile) {
        var xhr = new XMLHttpRequest();
        xhr.open('HEAD', urlToFile, false);
        xhr.send();

        if (xhr.status == "404") {
            return false;
        } else {
            return true;
        }
    }
</script>
<?php $this->load->view('common/footer'); ?>