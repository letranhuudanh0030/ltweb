<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- About us / Progress Bars -->
<section class="section-wrap">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div class="about-us">
                    <span class="subheading"><?= $data['news_about']['title'] ?></span>
                    <h4 class="about-us__title nocaps"><?= htmlRead($data['news_about']['description']) ?></h4>
                    <p class="about-us__text"><?= htmlRead($data['news_about']['content']) ?></p>
                </div>
            </div> <!-- end col -->

            <div class="col-sm-6">
                <img src="<?= $data['news_about']['image'] ?>" alt="" class="img-fluid" width="100%">
            </div> <!-- end col -->

        </div>
    </div>
</section> <!-- end about / progress bars -->