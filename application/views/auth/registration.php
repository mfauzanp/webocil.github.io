<div class="container">


    <div class="row justify-content-center">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b> Create an Account! <b</h1> </div> <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                            <hr>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name">
                                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" id="badge" name="badge" placeholder="Badge">
                                                <?= form_error('badge', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="confirm_password" placeholder="Repeat Password">
                                                    <?= form_error('confirm_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Register Account
                                            </button>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="<?= base_url(); ?>">Already have an account? Login!</a>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>