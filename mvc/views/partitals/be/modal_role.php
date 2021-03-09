<div class="modal fade" id="modal_role" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_role">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="role_name" class="col-form-label">Role Name <span class="text-danger">(*)</span>:</label>
                        <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Role Name" >
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-form-label">Role Type <span class="text-danger">(*)</span>:</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">-- Choose Role Type --</option>
                            <?php foreach($GLOBALS['config']['roles'] as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
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
