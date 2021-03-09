<div class="modal fade" id="modal_slide" tabindex="-1" role="dialog" aria-labelledby="productTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewsTypeModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_slide">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="slide_name" class="col-form-label">Title <span class="text-danger">(*)</span>:</label>
                        <input type="text" class="form-control" id="slide_name" name="slide_name" placeholder="Slide Title" required >
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