<!-- Feature -->
<section class="section-wrap section-wrap--sm pb-60">
    <div class="container">
        <div class="row">
            <?php foreach($data['ability'] as $key => $ability):?>
            <div class="col-md-4">
                <div class="feature">
                    <?php
                    $icon = ''; 
                    switch ($key) {
                        case 0:
                            $icon = 'fa fa-coffee';
                            break;
                        case 1:
                            $icon = 'fa fa-birthday-cake';
                            break;
                        case 2:
                            $icon = 'fa fa-leaf';
                            break;
                        default:
                            # code...
                            break;
                    } ?>
                    <i class="feature__icon feature__icon--circle <?= $icon ?>"></i>
                    <h3 class="feature__title"><?= $ability['title'] ?></h3>
                    <p class="feature__text"><?= htmlRead($ability['description']) ?></p>
                </div>
            </div> <!-- end feature -->
            <?php endforeach; ?>
        </div>
    </div>
</section> <!-- end feature -->