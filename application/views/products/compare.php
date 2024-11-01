    <section class="section_top inner_pages">
        <div class="container">
            <div class="row">
                <div class="row top_sec">
                    <div class="table-responsive">
                        <table class="table table-bordered table_bg_color">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <?php foreach ($products as $product) {
                                        $product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
                                        $image = json_decode($product['image_url']);
                                        if (empty($image->small)) {
                                            $image = base_url('assets/images/no_photo.png');
                                        } else {
                                            $image = base_url($image->small);
                                        }
                                        $product_url = base_url() . strtolower($categories[$product['category_id']]['url_title']) . "/" . strtolower($product['sku']);
                                    ?>
                                        <th>
                                            <a href="<?php echo $product_url; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $product['name']; ?>" class="table_img"></a>
                                            <p><a href="<?php echo $product_url; ?>" class="table_text"><?php echo $product['name']; ?></a></p>
                                        </th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($keys as $parameter => $specs) { ?>
                                    <tr>
                                        <td><?php echo $parameter ?></td>
                                        <?php if ($specs['child']) {
                                            foreach ($specs['child'] as $value) {
                                                if (!$value) {
                                                    $value = '&mdash;';
                                                } else {
                                                    if (is_array($value)) {
                                                        echo "<td>";
                                                        echo "<table class='table-striped table-hover'>";
                                                        foreach ($value as $v_child => $v_value) {
                                                            echo "<tr>";
                                                            echo "<td>" . $v_child . "</td>";
                                                            echo "<td>" . $v_value . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        echo "</table>";
                                                        echo "</td>";
                                                    } else { ?>
                                                        <td>
                                                            <p><?php echo $value; ?></p>
                                                        </td>
                                        <?php }
                                                }
                                            }
                                        } ?>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td>Delete</td>
                                    <?php $redirect_link = base_url() . "all-products";
                                    foreach ($products as $product) {
                                        $delete_link = "";
                                        if (isset($_GET['products']))
                                            $sku = explode(",", $_GET['products']);
                                        $sku_key = array_search($product['sku'], $sku);
                                        unset($sku[$sku_key]);
                                        $sku = implode(',', $sku);
                                        $delete_link = base_url() . "compare?products=" . $sku;
                                        if (empty($sku)) {
                                            $delete_link = $redirect_link;
                                        }
                                    ?>
                                        <td><a href="<?php echo $delete_link; ?>"><i class='fa fa-trash-o'></i></a></td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('common/footer'); ?>