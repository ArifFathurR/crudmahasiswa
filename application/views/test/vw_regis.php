<div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2"
                            src="assets/images/app-logo.svg" alt="logo"></a></div>
                <h2 class="auth-heading text-center mb-5">Buat Akun</h2>
                <div class="auth-form-container text-start">
                    <form class="auth-form login-form" method="post" action="<?= base_url('test/cek_regis'); ?>">
                        <div class="email mb-3">
                            <label class="sr-only" for="signin-email">Nama</label>
                            <input id="signin-email" name="nama" type="text" class="form-control signin-email"
                                placeholder="Nama" required="required">
                            
                        </div><!--//form-group-->
                        <div class="email mb-3">
                            <label class="sr-only" for="signin-email">Alamat Email</label>
                            <input id="signin-email" name="email" type="email" class="form-control signin-email"
                                placeholder="Alamat Email"   required="required">
                               
                        </div><!--//form-group-->
                        
                        <div class="email mb-3">
                            <label class="sr-only" for="signin-email">No hp</label>
                            <input id="signin-email" name="no_hp" type="text" class="form-control signin-email"
                                placeholder="No Hp"  required="required">
                                
                        </div><!--//form-group-->
                        <div class="email mb-3">
                            <label class="sr-only" for="signin-email">Password</label>
                            <input id="signin-email" name="password" type="password" class="form-control signin-email"
                                placeholder="password"  required="required">
                                
                        </div><!--//form-group-->
                            
                            <div class="extra mt-3 row justify-content-between">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                        <label class="form-check-label" for="RememberPassword">
                                            Remember me
                                        </label>
                                    </div>
                                </div><!--//col-6-->
                                <div class="col-6">
                                    <div class="forgot-password text-end">
                                        <a href="reset-password.html">Forgot password?</a>
                                    </div>
                                </div><!--//col-6-->
                            </div><!--//extra-->
                        </div><!--//form-group-->
                        <div class="text-center">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
                        </div>
                    </form>

                    <div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link"
                            href="<?= base_url() ?>">here</a>.</div>
                </div><!--//auth-form-container-->

            </div><!--//auth-body-->