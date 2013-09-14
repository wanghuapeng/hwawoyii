<form name="form1" method="post" id="form1">
<div class='signup_container'>
    <h1 class='signup_title'>
        <span id="Label3">登录</span></h1>
    <img src='images/people.png' id='admin' />
    <p>
        <span id="labMessage" style="color:Red;"></span>
    </p>
    <div id="signup_forms" class="signup_forms clearfix">
        <div class="form_row first_row">
            <label for="txtUserName">
                <span id="Label4">请输入用户名</span>
            </label>
            <input name="txtUserName" type="text" id="txtUserName" data-required="required" placeholder="请输入用户名" />
        </div>
        <div class="form_row">
            <label for="txtUserPwd">
                <span id="Label5">请输入密码</span>
            </label>
            <input name="txtUserPwd" type="password" id="txtUserPwd" data-required="required" name="user[password]" placeholder="请输入密码" />
        </div>

    </div>
    <div class="login-btn-set">
        <span style="padding-left:1px; float:left;"><input id="cbRememberId" type="checkbox" name="cbRememberId" /><label for="cbRememberId">记住密码</label></span>
        <input type="submit" name="btnsubmit" value="登录" id="btnsubmit" class="login-btn" style="color:White;font-size:18px;" />
        <div style=" padding-top:60px;text-align:right;">
            <div>
                <p id="QQlogin">

                </p>
                <p id="submit"><?php echo CHtml::link('注册',array('login/register')); ?>
                    <?php echo CHtml::link('忘记密码',array('login/getpwd')); ?>
                </p>
            </div>

        </div>
    </div>
</div>
</form>




