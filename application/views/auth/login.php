<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form class="user" method="post" action="<?= base_url('auth/index') ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
                        <label for="inputEmail">Email address</label>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                        <label for="inputPassword">Password</label>
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">
                            Remember Password
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="auth/registration">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>