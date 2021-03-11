<section id="slide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-uppercase" style="line-height: 2;"><?= $data['title_page'] ?></h3>
                        <button class="btn btn-success float-right text-uppercase" id="add_slide" data-toggle="modal" data-target="#modal_slide" data-title="ADD A NEW SLIDE" data-action="add">Add new</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-content" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Sort Order</th>
                                    <th>Publish</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['list'] as $key => $item) : ?>
                                    <tr id="row_<?= $item['id'] ?>">
                                        <td><?= $item['id'] ?></td>
                                        <td class="image">
                                        <?php foreach(explode(",", $item['image']) as $key => $image):?>
                                            <img src="<?= $key == 0 && $image ? $image : "/public/uploads/no-image.png" ?>" alt="" width="100px">
                                        <?php endforeach;?>
                                        </td>
                                        <td class="slide-name"><?= $item['name'] ?></td>
                                        <td>
                                            <input type="number" value="<?= $item['sort_order'] ?>" class="sort-order" dataId="<?= $item['id'] ?>">
                                        </td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" <?= $item['publish'] == 1 ? 'checked' : ''  ?> class="chk-switch-publish" dataId="<?= $item['id'] ?>">
                                                <span class="slider round"></span>
                                            </label>

                                        </td>
                                        <td>
                                            <button class="btn btn-info edit" data-ob='<?= json_encode($item) ?>' id="add_slide" data-toggle="modal" data-target="#modal_slide" data-action="edit" data-title="EDIT A NEW SLIDE">Edit</button>
                                            <button class="btn btn-danger delete" data-id="<?= $item['id'] ?>" data-toggle="modal" data-target="#modal_delete" data-title="DELETE A SLIDE" data-name="<?= $item['name'] ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Sort Order</th>
                                    <th>Publish</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./mvc/views/partitals/be/modal_slide.php"); ?>
    <?php require_once("./mvc/views/partitals/be/modal_delete.php"); ?>
</section>