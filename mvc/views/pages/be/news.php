<section id="news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-uppercase" style="line-height: 2;"><?= $data['title_page'] ?></h3>
                        <button class="btn btn-success float-right text-uppercase" id="add_news" data-toggle="modal" data-target="#modal_news" data-title="ADD A NEW NEWS" data-action="add">Add new</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-content" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Publish</th>
                                    <th>Highlight</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['list'] as $key => $item): ?>
                                    <tr id="row_<?= $item['id'] ?>">
                                        <td><?= $item['id'] ?></td>
                                        <td class="image">
                                        <?php foreach(explode(",", $item['image']) as $key => $image):?>
                                            <img src="<?= $key == 0 && $image ? $image : "/public/uploads/no-image.png" ?>" alt="" width="100px">
                                        <?php endforeach;?>
                                        </td>
                                        <td class="news-title text-primary"><?= $item['title'] ?></td>
                                        <td class="news-type">
                                            <?= getTableById('news_type', $item['type_id'])['name'] ?>
                                        </td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" <?= $item['publish'] == 1 ? 'checked' : ''  ?> class="chk-switch-publish" dataId="<?= $item['id'] ?>">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" <?= $item['highlight'] == 1 ? 'checked' : ''  ?> class="chk-switch-highlight" dataId="<?= $item['id'] ?>">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <button class="btn btn-info edit" data-ob='<?= json_encode($item) ?>' id="add_news" data-toggle="modal" data-target="#modal_news" data-action="edit">Edit</button>
                                            <button class="btn btn-danger delete" data-id="<?= $item['id'] ?>" data-toggle="modal" data-target="#modal_delete" data-title="DELETE A NEWS" data-name="<?= $item['title'] ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Publish</th>
                                    <th>Highlight</th>
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
    <?php require_once("./mvc/views/partitals/be/modal_news.php"); ?>
    <?php require_once("./mvc/views/partitals/be/modal_delete.php"); ?>
</section>