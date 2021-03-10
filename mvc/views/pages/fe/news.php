<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- Blog Standard -->
<section class="section-wrap blog bg-light">
    <div class="container">
        <div class="row">

            <!-- content -->
            <div class="col-md-9 blog__content">

                <div class="row">
                    <?php foreach ($data['news'] as $news) : ?>
                        <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
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
                                        <!-- <li><a href="blog-single.html">10 Comments</a></li> -->
                                    </ul>
                                    <div class="entry__content">
                                        <p class="entry__excerpt"><?= htmlRead($news['description']) ?></p>
                                        <a href="/news/<?= $news['slug'] ?>" class="btn btn-sm btn-dark">Xem thêm</a>
                                    </div>
                                </div>
                            </article>
                        </div> <!-- end post -->
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="pagination text-center">
                    <nav class="pagination__nav clearfix">
                        <a href="#" class="pagination__page"><i class="fa fa-angle-left"></i></a>
                        <span class="pagination__page active">1</span>
                        <a href="#" class="pagination__page">2</a>
                        <a href="#" class="pagination__page">3</a>
                        <a href="#" class="pagination__page">4</a>
                        <a href="#" class="pagination__page"><i class="fa fa-angle-right"></i></a>
                    </nav>
                </div>

            </div> <!-- end col -->

            <!-- sidebar -->
            <aside class="col-md-3 sidebar mt-sm-50">

                <div class="widget widget__search">
                    <form class="relative">
                        <input type="search" class="widget__search__input" placeholder="Search">
                        <button type="submit" class="widget__search__button"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <!-- Latest Portst -->
                <div class="widget widget__recent-posts">
                    <h3 class="widget__title">Bài viết mới nhất</h3>
                    <ul class="widget__recent-posts__list">
                        <?php foreach($data['news_latest'] as $key => $news):?>
                            <?php if($key < 3):?>
                            <li>
                                <a href="blog-single.html"><?= $news['title'] ?></a>
                                <ul class="entry__meta widget__recent-posts__entry__meta">
                                    <li class="entry__meta__date">
                                        <i class="fa fa-calendar-o"></i><a href="#"><?= dateFormat($news['created_at'], "d-m-Y") ?></a>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </aside> <!-- end col -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end blog standard -->