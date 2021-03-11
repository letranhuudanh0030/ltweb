<section id="news_type">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-uppercase" style="line-height: 2;"><?= $data['title_page'] ?></h3>
                        <button class="btn btn-success float-right text-uppercase" id="add_news_type" data-toggle="modal" data-target="#modal_news_type" data-title="ADD A NEW NEWS TYPE" data-action="add">Add new</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table-content" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Publish</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['list'] as $key => $item) : ?>
                                    <tr id="row_<?= $item['id'] ?>">
                                        <td><?= $item['id'] ?></td>
                                        <td class="news-type-name"><?= $item['name'] ?></td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" <?= $item['publish'] == 1 ? 'checked' : ''  ?> class="chk-switch-publish" dataId="<?= $item['id'] ?>">
                                                <span class="slider round"></span>
                                            </label>

                                        </td>
                                        <td>
                                            <button class="btn btn-info edit" data-ob='<?= json_encode($item) ?>' id="add_news_type" data-toggle="modal" data-target="#modal_news_type" data-action="edit" data-title="EDIT A NEW NEWS TYPE">Edit</button>
                                            <button class="btn btn-danger delete" data-id="<?= $item['id'] ?>" data-toggle="modal" data-target="#modal_delete" data-title="DELETE A NEWS TYPE" data-name="<?= $item['name'] ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
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
    <?php require_once("./mvc/views/partitals/be/modal_news_type.php"); ?>
    <?php require_once("./mvc/views/partitals/be/modal_delete.php"); ?>
</section>