<div class="modal fade" id="modal_product_type" tabindex="-1" role="dialog" aria-labelledby="productTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productTypeModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_product_type">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="product_type_name" class="col-form-label">Type Name <span class="text-danger">(*)</span>:</label>
                        <input type="text" class="form-control" id="product_type_name" name="product_type_name" placeholder="Product Type Name" required >
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