<?php require('./mvc/views/partitals/fe/page_title.php') ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>
    *{
        font-size: 16px;
    }
</style>
<section id="pricing">
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Giá</th>
                        <th>Giảm giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['products'] as $key => $product ): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><img src="<?= $product['image'] ?>" alt="" class="img-fluid" width="50px"></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= getTableById("product_type",$product['type_id'])['name'] ?></td>
                        <td><?= number_format($product['price'], 0, ',', '.') ?> đ</td>
                        <td><?= $product['discount'] > 100 ? "-".$product['discount']."đ" : $product['discount'] . "%" ?></td>           
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>