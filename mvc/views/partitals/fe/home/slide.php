<!-- Revolution Slider -->
<section>
    <div class="rev_slider_wrapper">
        <div class="rev_slider" id="slider4" data-version="5.0">
            <ul>
                <!-- SLIDE 1 -->
                <?php foreach($data['slides'] as $key => $slide): ?>
                <li data-fstransition="fade" data-transition="scaledownfrombottom" data-easein="default" data-easeout="default" data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="<?= $slide['name'] ?>">
                    <!-- MAIN IMAGE -->
                    <img src="<?= $slide['image'] ?>" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">

                    <!-- LINE -->
                    <div class="tp-caption tp-shape tp-shapewrapper hero-line rs-parallaxlevel-8" data-x="center" data-y="center" data-voffset="-161" data-width="870" data-height="4" data-frames='[{
                  "delay":1400,
                  "speed":1200,
                  "frame":"0",
                  "from":"sX:0;opacity:0;",
                  "ease":"Power3.easeOut",
                  "to":"o:1;"
                  },{
                  "delay":"wait",
                  "speed":1000,
                  "frame":"999",
                  "to":"opacity:0;","ease":"Power3.easeOut"
                }]' style="background-color:rgba(255, 255, 255, 0.5);">
                    </div>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption hero-text nocaps rs-parallaxlevel-8" data-x="center" data-y="center" data-voffset="[-30,-30,-30,-20]" data-fontsize="[95,85,75,45]" data-textAlign="center" data-frames='[{
                  "delay":1000,
                  "speed":900,
                  "frame":"0",
                  "from":"y:150px;opacity:0;",
                  "ease":"Power3.easeOut",
                  "to":"o:1;"
                  },{
                  "delay":"wait",
                  "speed":1000,
                  "frame":"999",
                  "to":"opacity:0;","ease":"Power3.easeOut"
                }]' data-splitout="none"><?= $slide['name'] ?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption medium-text rs-parallaxlevel-8" data-x="center" data-y="center" data-voffset="[60,60,60,50]" data-width="[none, none, none, 300]" data-textAlign="center" data-whitespace="[nowrap, nowrap, nowrap, normal]" data-frames='[{
                  "delay":1200,
                  "speed":900,
                  "frame":"0",
                  "from":"y:150px;opacity:0;",
                  "ease":"Power3.easeOut",
                  "to":"o:1;"
                  },{
                  "delay":"wait",
                  "speed":1000,
                  "frame":"999",
                  "to":"opacity:0;","ease":"Power3.easeOut"
                }]'><?= $slide['description'] ?>
                    </div>

                    <!-- LINE -->
                    <div class="tp-caption tp-shape tp-shapewrapper hero-line rs-parallaxlevel-8" data-x="center" data-y="center" data-voffset="159" data-width="870" data-height="4" data-frames='[{
                  "delay":1400,
                  "speed":1200,
                  "frame":"0",
                  "from":"sX:0;opacity:0;",
                  "ease":"Power3.easeOut",
                  "to":"o:1;"
                  },{
                  "delay":"wait",
                  "speed":1000,
                  "frame":"999",
                  "to":"opacity:0;","ease":"Power3.easeOut"
                }]' style="background-color:rgba(255, 255, 255, 0.5);">
                    </div>

                </li> <!-- end slide 1 -->
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</section>