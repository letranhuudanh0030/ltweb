<!-- Feature Tabs -->
<section class="section-wrap pb-50">
    <div class="container">

        <div class="heading-row mb-30 text-center">
            <h2 class="heading">Dịch vụ của chúng tôi</h2>
        </div>

        <div class="row">
            <div class="tabs feature-tabs text-center">
                <ul class="tabs__list">
                    <?php foreach($data['services'] as $key => $service): ?>
                    <li class="<?= $key == 0 ? "active" : "" ?> feature-tabs__tabs__item tabs__item col-sm-4 col-xs-4 col-xxs-6">
                        <a href="#tab-<?= $key ?>" class="feature-tabs__link tabs__link">
                            <?php
                            $icon = ''; 
                            switch ($key) {
                                case 0:
                                    $icon = 'icon-search';
                                    break;
                                case 1:
                                    $icon = 'icon-tools';
                                    break;
                                case 2:
                                    $icon = 'icon-puzzle';
                                    break;
                                default:
                                    # code...
                                    break;
                            } ?>
                            <i class="<?= $icon ?> feature-tabs__icon"></i><?= $service['title'] ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                        <!-- <li class="feature-tabs__tabs__item tabs__item col-sm-2 col-xs-4 col-xxs-6">
                            <a href="#tab-2" class="feature-tabs__link tabs__link">
                                <i class="icon-expand feature-tabs__icon"></i>Fully Responsive
                            </a>
                        </li>
                        <li class="feature-tabs__tabs__item tabs__item col-sm-2 col-xs-4 col-xxs-6">
                            <a href="#tab-3" class="feature-tabs__link tabs__link">
                                <i class="icon-tools-2 feature-tabs__icon"></i>Clean Html Code
                            </a>
                        </li>
                        <li class="feature-tabs__tabs__item tabs__item col-sm-2 col-xs-4 col-xxs-6">
                            <a href="#tab-4" class="feature-tabs__link tabs__link">
                                <i class="icon-speedometer feature-tabs__icon"></i>Fast Loading
                            </a>
                        </li>
                        <li class="feature-tabs__tabs__item tabs__item col-sm-2 col-xs-4 col-xxs-6">
                            <a href="#tab-5" class="feature-tabs__link tabs__link">
                                <i class="icon-tools feature-tabs__icon"></i>Trendy Design
                            </a>
                        </li>
                        <li class="feature-tabs__tabs__item tabs__item col-sm-2 col-xs-4 col-xxs-6">
                            <a href="#tab-6" class="feature-tabs__link tabs__link">
                                <i class="icon-puzzle feature-tabs__icon"></i>Easy Customization
                            </a>
                        </li> -->
                </ul>
            </div>
        </div>
    </div>
</section> <!-- end feature tabs -->
<!-- Feature Tabs Content -->
<section class="section-wrap tabs__content bg-light pb-50 pt-50">
    <div class="container">
        <?php foreach($data['services'] as $key => $service): ?>
        <div class="tabs__content__pane active" id="tab-<?= $key ?>">
            <div class="row">
                <div class="col-md-12">
                    <?= htmlRead($service['description']) ?>
                </div>
                <!-- <div class="col-md-6 col-md-offset-1 tabs__content__text">
                    <p>Canna Theme is the Best Multi-purpose theme on ThemeForest. Get your business on the next level. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div> -->
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section> <!-- end feature tabs content -->