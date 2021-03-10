<!-- From Blog -->
<section class="section-wrap from-blog pb-90 bg-light">
    <div class="container">

        <div class="heading-row text-center">
            <span class="subheading">Tin tức</span>
            <h2 class="heading">Cập nhật mới nhất</h2>
        </div>

        <div class="row">
            <?php foreach($data['news'] as $news) : ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <article class="entry from-blog__entry box-shadow">
                    <a href="blog-single.html" class="entry__img-holder">
                        <img src="<?= $news['image'] ?>" alt="" class="entry__img">
                    </a>
                    <div class="card">
                        <h4 class="from-blog__entry__title entry__title">
                            <a href="blog-single.html"><?= $news['title'] ?></a>
                        </h4>
                        <ul class="entry__meta">
                            <li><?= dateFormat($news['created_at'], "d-m-Y") ?></li>
                            <li><a href="blog-single.html">10 Comments</a></li>
                        </ul>
                        <div class="entry__content">
                            <p class="entry__excerpt"><?= htmlRead($news['description']) ?></p>
                            <a href="blog-single.html" class="btn btn-sm btn-dark">Xem thêm</a>
                        </div>
                    </div>
                </article>
            </div> <!-- end post -->
            <?php endforeach; ?>
        </div>
    </div>
</section> <!-- end from blog -->