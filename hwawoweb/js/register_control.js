$(document).ready(function() {
    $.formValidator.initConfig({ formid: "form1", onerror: function (msg) { alert(msg) } });
    $("#txtUserName").formValidator({ onshow: "请输入用户名", onfocus: "用户名至少5-16位，不能包含汉字和空格！", oncorrect: "恭喜,该用户名可以注册" }).inputValidator({ min: 5, max: 16, onerror: "非法用户名，长度应为5-16！" }).regexValidator({ regexp: "username", datatype: "enum", onerror: "用户名格式不正确" })//username:进行正则表达式验证
        .ajaxValidator({
            type: "get",
            url: "AjaxData/CheckUserName.aspx",
            datatype: "json",
            success: function (data) {
                if (data == "1") {
                    return true;
                }
                else {
                    return false;
                }
            },
            buttons: $("#btnReg"),
            error: function () { alert("服务器没有返回数据，可能服务器忙，请重试"); },
            onerror: "该用户名已存在，请更换用户名",
            onwait: "正在对用户名进行合法性校验，请稍候..."
        });
    $("#txtUserPwd").formValidator({ onshow: "请输入密码", onfocus: "密码不能为空", oncorrect: "密码正确" }).inputValidator({ min: 1, empty: { leftempty: false, rightempty: false, emptyerror: "密码两边不能有空符号" }, onerror: "密码不能为空,请确认" });
    $("#txtSureUserPwd").formValidator({ onshow: "请输入重复密码", onfocus: "两次密码必须一致哦", oncorrect: "密码一致" }).inputValidator({ min: 1, empty: { leftempty: false, rightempty: false, emptyerror: "重复密码两边不能有空符号" }, onerror: "重复密码不能为空,请确认" }).compareValidator({ desid: 'txtUserPwd', operateor: "=", onerror: "2次密码不一致,请确认" });
    $("#dllQustion").formValidator({ onshow: "请选择密码提示问题,用于找回密码", onfocus: "密码提示问题必须选择", oncorrect: "谢谢您的支持" }).inputValidator({ min: 1, onerror: "请选择您的密码提示问题!" });
    $("#txtAnswer").formValidator({ onshow: "请输入您的问题答案", onfocus: "至少要输入2个汉字或4个字符", oncorrect: "恭喜您,输入正确", defaultvalue: "" }).inputValidator({ min: 4, onerror: "答案太简单,请重新填写" });
    $("#txtEmail").formValidator({ onshow: "请输入你的email", onfocus: "请注意email的格式，例如:r919j@163.com", oncorrect: "恭喜，email输入正确" }).regexValidator({ regexp: "email", datatype: "enum", onerror: "email格式不正确" })
        .ajaxValidator({
            type: "get",
            url: "AjaxData/CheckUserEmail.aspx",
            datatype: "json",
            success: function (data) {
                if (data == "1") {
                    return true;
                }
                else {
                    return false;
                }
            },
            buttons: $("#btnReg"),
            error: function () { alert("服务器没有返回数据，可能服务器忙，请重试"); },
            onerror: "该邮箱已被人使用，请更换邮箱",
            onwait: "正在对邮箱地址进行合法性校验，请稍候..."
        });
});
