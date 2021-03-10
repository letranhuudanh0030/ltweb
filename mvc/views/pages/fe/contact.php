<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<!-- Contact details -->
<section class="section-wrap bg-light pb-90">
    <div class="container">

        <div class="heading-row text-center">
            <h2 class="heading">Thông tin liên hệ</h2>
        </div>

        <div class="row">
            <div class="col-md-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="feature-1 feature-1--sm-padding box-shadow">
                    <i class="feature__icon icon icon-mobile"></i>
                    <h3 class="feature__title">Điện thoại</h3>
                    <p class="feature__text feature__text--sm">0966 461 761</p>
                </div>
            </div> <!-- end contact item -->

            <div class="col-md-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="feature-1 feature-1--sm-padding box-shadow">
                    <i class="feature__icon icon icon-layers"></i>
                    <h3 class="feature__title">Email</h3>
                    <p class="feature__text feature__text--sm"><a href="mailto:danh.le1997@hcmut.edu.com">danh.le1997@hcmut.edu.com</a></p>
                </div>
            </div> <!-- end contact item -->

            <div class="col-md-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="feature-1 feature-1--sm-padding box-shadow">
                    <i class="feature__icon icon icon-speedometer"></i>
                    <h3 class="feature__title">Địa chỉ</h3>
                    <address class="feature__text feature__text--sm">268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh, Việt Nam</address>
                </div>
            </div> <!-- end contact item -->

        </div>
    </div>
</section> <!-- end contact details -->


<!-- Contact -->
<section class="section-wrap white-text" id="contact" style="background-image: url(/public/canna/img/sections/contact_bg.jpg)">
    <div class="container">

        <div class="heading-row text-center">
            <span class="subheading">Liên hệ</span>
            <h2 class="heading">Gửi email liên lạc</h2>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form id="contact-form" action="/send" class="text-center" method="POST">
                    <div class="row">
                        <div class="col-md-6 contact-name">
                            <input name="name" id="name" type="text" placeholder="Tên*">
                        </div>
                        <div class="col-md-6 contact-email">
                            <input name="mail" id="mail" type="email" placeholder="E-mail*">
                        </div>
                    </div>

                    <textarea name="comment" id="comment" placeholder="Tin nhắn"></textarea>
                    <!-- <input type="submit" class="btn btn-lg btn-color btn-button" value="Gửi Email" id="submit-message"> -->
                    <button type="submit" class="btn btn-lg btn-color btn-button" name="submit_email">Gửi Email</button>
                    <div id="msg" class="message"></div>
                </form>
            </div> <!-- end col -->

        </div>
    </div>
</section> <!-- end contact -->

<!-- Google Map -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.494668100784!2d106.65843061462245!3d10.773374292323586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1615404788427!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>