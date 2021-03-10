   <!-- Selected Works -->
   <section class="section-wrap bg-dark pt-90">
       <div class="container-fluid no-padding">

           <div class="heading-row mb-80 text-center">
               <div class="container">
                   <h2 class="heading white">Thư viện ảnh</h2>
               </div>
           </div>


           <div id="project-grid" class="project-grid grid-4-col no-gutter">

               
                <?php foreach($data['gallery'] as $key => $img):?>
               <div class="project project--hover-2 print mockups">
                   <div class="project__img-holder">
                       <img src="<?= $img ?>" alt="" class="project__img" width="300px" height="300px">
                       <div class="project__overlay">
                           <div class="project__icons">
                               <a href="<?= $img ?>" class="lightbox-img"><i class="fa fa-search"></i></a>
                               <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                           </div>
                       </div>
                       <div class="project__description">
                           <h3 class="project__title"><a href="portfolio-single.html">Hình ảnh #<?= $key + 1 ?></a></h3>
                           <span class="project__category"><a href="portfolio-single.html">Japanit</a></span>
                       </div>
                   </div>
               </div> <!-- end project -->
               <?php endforeach; ?>

               


           </div> <!-- end portfolio grid -->


           <div class="row mt-60">
               <div class="col-md-12 text-center">
                   <a href="portfolio-4-col.html" class="btn btn-lg btn-color btn-icon">
                       <span>Xem thêm</span>
                       <i class="fa fa-angle-right"></i>
                   </a>
               </div>
           </div>

       </div> <!-- end container -->
   </section> <!-- end selected works-->