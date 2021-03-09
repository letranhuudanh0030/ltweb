<div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_user">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Full Name <span class="text-danger">(*)</span>:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" >
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-form-label">Role <span class="text-danger">(*)</span>:</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">-- Choose Role --</option>
                            <?php foreach($data['types'] as $key => $role): ?>
                                <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">Phone </label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" >
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email <span class="text-danger">(* is Username)</span>:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                    </div>
                    <div class="form-group form-password">
                        <label for="password" class="col-form-label">Password <span class="text-danger">(*)</span>:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                    </div>
                    <div class="form-group form-repassword">
                        <label for="rePassword" class="col-form-label">Re - Password <span class="text-danger">(*)</span>:</label>
                        <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Re-enter the password" >
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
