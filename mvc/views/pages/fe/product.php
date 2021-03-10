<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- Portfolio 4 Columns -->
<section class="section-wrap bg-light">
    <div class="container">

        <!-- filter -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="project-filter">
                    <a href="#" class="filter active" data-filter="*">Tất cả</a>
                    <?php foreach ($data['product_type'] as $key => $type) : ?>
                        <a href="#" class="filter" data-filter=".type-<?= $type['id'] ?>"><?= $type['name'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> <!-- end filter -->

        <div class="row">
            <div class="col-12">
                <div id="project-grid" class="project-grid grid-4-col small-gutter">
                    <?php foreach ($data['products'] as $key => $product) : ?>
                        <div class="project type-<?= $product['type_id']?>">
                            <div class="box-shadow">
                                <img src="<?= isset($product['image']) ? $product['image'] : '/public/uploads/no-image.png' ?>" class="img-fullwidth" alt="">
                                <div class="card">
                                    <h4><?= $product['name'] ?></h4>

                                    <?php 
                                    $price = null;
                                    if(isset($product['discount'])) {
                                        if($product['discount'] > 100){
                                            $price = $product['price'] - $product['discount'];
                                        } else {
                                            $price =  $product['price'] - ($product['price'] * $product['discount'] / 100) ;
                                        } 
                                    } else {
                                        $price = $product['price'];
                                    }
                                    $price = number_format($price,0,',','.')
                                    ?>

                                    <p class="text-danger font-weight-bold"><del class="text-muted" style="margin-right: 10px"><?= number_format($product['price'], 0, ',', '.')?> đ</del><?= $price ?> đ</p>
                                    <a href="/product/<?= $product['slug'] ?>">Xem chi tiết</a>
                                </div>
                            </div>
                        </div> <!-- end project -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section> <!-- end portfolio-->