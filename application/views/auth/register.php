<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Create new account</h4>
        <form class="user" method="post" action="<?= base_url(); ?>auth/register">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password1">Password
                    </label>
                    <input id="password1" type="password" class="form-control" name="password1">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="password2">Confirm Password
                    </label>
                    <input id="password2" type="password" class="form-control" name="password2">
                </div>
            </div>


            <div class="form-group no-margin">
                <button type="submit" class="btn btn-primary btn-block button2" style="background-color: #01A613; border:#01A613;">
                    Sign Up
                </button>
            </div>
            <div class="text-center mt-3 small">
                Already have an account? <a href="<?= base_url(); ?>auth/index">Sign In</a>
            </div>
        </form>
    </div>
</div>