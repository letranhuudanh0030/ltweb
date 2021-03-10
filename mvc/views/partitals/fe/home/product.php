    <!-- Mission / Vision / Results -->
    <section class="section-wrap bg-light pb-90">
        <div class="container">
            <div class="heading-row mb-30 text-center">
                <h2 class="heading">Sản phẩm nổi bật</h2>
            </div>
            <div class="row">
                <?php foreach ($data['products'] as $key => $product) : ?>
                    <div class="col-md-4 mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
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
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section> <!-- end mission/vision/results -->