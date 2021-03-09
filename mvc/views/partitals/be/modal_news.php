<div class="modal fade" id="modal_news" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_news">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="news_name" class="col-form-label">Title <span class="text-danger">(*)</span>:</label>
                        <input type="text" class="form-control" id="news_name" name="news_name" placeholder="Title" >
                    </div>
                    <div class="form-group">
                        <label for="news_type" class="col-form-label">News Type <span class="text-danger">(*)</span>:</label>
                        <select name="news_type" id="news_type" class="form-control">
                            <option value="">-- Choose news Type --</option>
                            <?php foreach($data['types'] as $type): ?>
                                <option value="<?= $type['id'] ?>"><?= $type['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="discount" class="col-form-label">Image:</label>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="image"
                                    name="image" readonly value="">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary browser_image"
                                        data-toggle="modal" data-target="#modal-file" type="button"
                                        data-name-type='image'>Browser</button>
                                </div>
                            </div>
                            <span class="text-small text-gray help-block-none">can choose images.</span>
                            <br>
                            <div class="show_image">

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-form-label">Content:</label>
                        <textarea class="form-control" id="content" placeholder="Content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta-title" class="col-form-label">Meta Title:</label>
                        <textarea class="form-control" id="meta_title" placeholder="Meta Title SEO"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta-description" class="col-form-label">Meta Description:</label>
                        <textarea class="form-control" id="meta_description" placeholder="Meta Description SEO"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meta-keyword" class="col-form-label">Meta Keyword:</label>
                        <textarea class="form-control" id="meta_keyword" placeholder="Meta Keyword SEO"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('modal_gallery.php'); ?>

