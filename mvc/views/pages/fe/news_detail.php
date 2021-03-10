<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- Blog Single -->
<section class="section-wrap blog blog__single bg-light">
    <div class="container">
        <div class="row">

            <!-- content -->
            <div class="col-md-9 blog__content">

                <!-- standard post -->
                <article class="entry mb-0">
                    <div class="entry__img">
                        <img src="<?= $data['news']['image'] ?>" alt="">
                    </div>

                    <div class="entry__body">

                        <h2 class="entry__title"><?= $data['news']['title'] ?></h2>

                        <ul class="entry__meta">
                            <li class="entry__meta__date">
                                <i class="fa fa-calendar-o"></i><a href="#"><?= dateFormat($data['news']['created_at'], "d-m-Y") ?></a>
                            </li>
                        </ul>
                        <div class="entry__content">
                            <div class="content">
                                <?= htmlRead($data['news']['content']) ?>
                            </div>
                            <div class="row pb-50">
                                <div class="col-lg-12">
                                    <div class="socials-share entry__socials-share clearfix">
                                        <span>Share:</span>
                                        <div class="socials">
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <!-- Comments -->
                            <hr>
                            <h3 class="mt-30">Bình luận:</h3>
                            <div class="fb-comments" data-href="<?= $_SERVER['HTTP_REFERER'] ?>" data-width="100%" data-numposts="5"></div>


                        </div> <!-- end endtry content -->

                    </div>
                </article> <!-- end entry item -->

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
                        <?php foreach($data['news_latest'] as $key => $news_latest):?>
                            <?php if($key < 5): ?>
                            <li>
                                <a href="/news/<?= $news_latest['slug'] ?>"><?= $news_latest['title'] ?></a>
                                <ul class="entry__meta widget__recent-posts__entry__meta">
                                    <li class="entry__meta__date">
                                        <i class="fa fa-calendar-o"></i><a href="#"><?= dateFormat($news_latest['created_at'], "d-m-Y") ?></a>
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