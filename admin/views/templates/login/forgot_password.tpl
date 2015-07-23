{include file="login/header.tpl"  name=""}
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Forgot Password</p>
        {include file="common/alert_box.tpl"  name=""}
        <form name="login_form" id="login_form" action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="email" class="form-control" placeholder="E-Mail" value="{set_value('email')}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span><span class='error-msg'>{form_error('email')}</span>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <button name="send_password" value="send_password" type="submit" class="btn btn-primary btn-block btn-flat">Send Password</button>
                </div><!-- /.col -->
            </div>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
{include file="login/footer.tpl"  name=""}

