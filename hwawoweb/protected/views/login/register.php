<?php  Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/validator.css', 'screen, projection');  ?>
<?php  Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/UserReg.css', 'screen, projection');  ?>
<?php  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/formValidatorRegex.js'); ?>
<?php  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/formValidator_min.js'); ?>
<?php  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/register_control.js', CClientScript::POS_HEAD); ?>
<div style="width:1024px; margin:0 auto;">
    <form name="form1" method="post" id="form1">
    <table class="RegTable" cellspacing="0">
        <tr>
            <td style="background-color: #0099ff" colspan="3" align="center" height="50">
                <strong style="color: White">
                    <span id="LabUApply">帐号申请</span></strong>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr style="padding-top: 20px; margin-top: 20px;">
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplyID">帐号：</span>
            </td>
            <td>
                <input name="txtUserName" type="text" maxlength="18" id="txtUserName" style="width:160px;" />
            </td>
            <td>
                <div id='txtUserNameTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr class="double">
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplypwd">密码：</span>
            </td>
            <td>
                <input name="txtUserPwd" type="password" maxlength="20" id="txtUserPwd" style="width:160px;" />
            </td>
            <td>
                <div id='txtUserPwdTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplyquerenpwd">确认密码：</span>
            </td>
            <td>
                <input name="txtSureUserPwd" type="password" maxlength="20" id="txtSureUserPwd" style="width:160px;" />
            </td>
            <td>
                <div id='txtSureUserPwdTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr class="double">
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplyquerenSecurityquestion">密保问题：</span>
            </td>
            <td>
                <select name="dllQustion" id="dllQustion" style="width:205px;">
                    <option selected="selected" value="0">选择一个问题</option>
                    <option value="你最尊敬的老师是那个?">你最尊敬的老师是那个?</option>
                    <option value="你最喜欢的动物是什么?">你最喜欢的动物是什么?</option>
                    <option value="你最喜欢的艺人是那个?">你最喜欢的艺人是那个?</option>
                    <option value="你最喜欢的艺术是什么?">你最喜欢的艺术是什么?</option>
                    <option value="你最崇拜的名人是那个?">你最崇拜的名人是那个?</option>
                    <option value="你最喜欢的音乐是什么?">你最喜欢的音乐是什么?</option>
                    <option value="你爸爸的名字叫什么？">你爸爸的名字叫什么？</option>
                    <option value="你妈妈的名字叫什么?">你妈妈的名字叫什么?</option>
                    <option value="你配偶的名字叫什么?">你配偶的名字叫什么?</option>

                </select>
                <br />
            </td>
            <td>
                <div id='dllQustionTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplydaan">密保答案:</span>
            </td>
            <td>
                <input name="txtAnswer" type="text" maxlength="30" id="txtAnswer" style="width:200px;" />
            </td>
            <td>
                <div id='txtAnswerTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr class="double">
            <td>
                <font color="red">&nbsp;* </font>
                <span id="LabUApplyEmail">邮箱:</span>
            </td>
            <td>
                <input name="txtEmail" type="text" maxlength="30" id="txtEmail" style="width:200px;" />
            </td>
            <td>
                <div id='txtEmailTip' style="width: 250px">
                </div>
            </td>
        </tr>
        <tr class="double">
            <td colspan="3" align="center" style="padding-top: 30px;">
                <input type="image" name="btnReg" id="btnReg" src="Images/btn_login.gif" style="border-width:0px;" />
                &nbsp;&nbsp;&nbsp;
            </td>
        </tr>
    </table>
    </form>
</div>





