<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1796">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Sign In</h3>
                <div class="a">
                    <span>You can use these credentials for demo testing:</span>
                </div>
                <div class="b">
                    <span>
                        <b>Dealer:</b><br>
                        dealer<br>
                        dealer
                    </span>

                    <span>
                        <b>User:</b><br>
                        demo<br>
                        demo
                    </span>
                </div>
            </div>
           
        </div>
        <div class="stm-login-forms">
                <form method="post" class="aa">
                    <div class="form-group">
                        <h4>Login or E-mail</h4>
                        <input type="text" name="stm_user_login" placeholder="Enter login or E-mail">
                    </div>
                    <div class="form-group">
                        <h4>Password</h4>
                        <input type="password" name="stm_user_password" placeholder="Enter password">
                    </div>
                    <div class="form-group form-checker">
                        <label>
                            <span class="checker"><input type="checkbox" name="stm_remember_me">Remember me</span>
                        </label>
                        <div class="stm-forgot-password">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                    <input class="box" type="submit" value="Login">
                    <span class="stm-listing-loader"><i class="stm-icon-load1"></i></span>
                </form>
            </div>
    </div>
</div>