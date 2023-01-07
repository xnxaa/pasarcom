                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="card-title text-center">Login</h4>
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url(); ?>auth/index">
                                <div class=" form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>


                                <div class="form-group">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="text-right">
                                        <a href="password-reset.html" class="small">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-primary btn-block button2" style="background-color: #01A613; border:#01A613">
                                        Sign In
                                    </button>
                                </div>
                                <div class="text-center mt-3 small">
                                    Don't have an account? <a href="<?= base_url(); ?>auth/register">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>