<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- Portfolio Single -->
<section class="section-wrap">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="owl-single-project" class="owl-carousel owl-theme dots-inside">
                    <?php foreach (explode(",", $data['product']['image']) as $key => $img) : ?>
                        <div class="item">
                            <img src="<?= $img ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div> <!-- end owl carousel -->
            </div> <!-- end col -->

            <div class="col-md-4">
                <div class="project__info">
                    <h2 class="project__info__title"><?= $data['product']['name'] ?></h2>
                    <p class="project__info__text"><?= htmlRead($data['product']['description']) ?></p>
                    <ul class="project__info__meta">
                        <li><span>Ngày đăng:</span> <?= dateFormat($data['product']['created_at'], "d-m-Y") ?></li>
                        <li><span>Loại:</span><a href="#"> <?= getTableById('product_type', $data['product']['type_id'])['name'] ?></a></li>
                    </ul>
                    <a href="/contact" class="project__info__button btn btn-sm btn-color">Liên hệ</a>
                    <div class="socials-share clearfix">
                        <span>Share:</span>
                        <div class="socials right">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-md-12">
                <h3 class="mt-30">Nội dung:</h3>
                <hr>
                <div class="content">
                    <?= htmlRead($data['product']['content']) ?>
                </div>
                <hr>
                <h3 class="mt-30">Bình luận:</h3>
                <div class="fb-comments" data-href="<?= $_SERVER['HTTP_REFERER'] ?>" data-width="100%" data-numposts="5"></div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end portfolio single -->

<!-- Related Projects -->
<section class="section-wrap related-projects bg-light">
    <div class="container">
        <h4>Sản phẩm liên quan</h4>
        <?php if(count($data['products']) > 1): ?>
        <div class="row mt-20">
            <div id="owl-related-projects" class="owl-carousel owl-theme">                
                <?php foreach ($data['products'] as $key => $product_latest) : ?>
                    <?php if($product_latest['id'] != $data['product']['id']):?>
                    <div class="box-shadow p-4">
                        <img src="<?= isset($product_latest['image']) ? $product_latest['image'] : '/public/uploads/no-image.png' ?>" class="img-fullwidth" alt="">
                        <div class="card">
                            <h4><?= $product_latest['name'] ?></h4>

                            <?php 
                            $price = null;
                            if(isset($product_latest['discount'])) {
                                if($product_latest['discount'] > 100){
                                    $price = $product_latest['price'] - $product_latest['discount'];
                                } else {
                                    $price =  $product_latest['price'] - ($product_latest['price'] * $product_latest['discount'] / 100) ;
                                } 
                            } else {
                                $price = $product_latest['price'];
                            }
                            $price = number_format($price,0,',','.')
                            ?>

                            <p class="text-danger font-weight-bold"><del class="text-muted" style="margin-right: 10px"><?= number_format($product_latest['price'], 0, ',', '.')?> đ</del><?= $price ?> đ</p>
                            <a href="/product/<?= $product_latest['slug'] ?>">Xem chi tiết</a>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div> <!-- end owl carousel-->

            <div class="col-md-12 mt-30 text-center">
                <div class="owl-custom-navigation">
                    <a class="owl-custom-navigation__prev"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-custom-navigation__next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div> <!-- end row -->
        <?php else: ?>
            <p>Không có sản phẩm liên quan.</p>
        <?php endif; ?>
    </div> <!-- end container -->
</section> <!-- end related projects-->