<div>
    <ul class="nav nav-tabs">
        <li><a></a></li>
        <li><a href="/fahuo/index">发货</a></li>
        <li><a href="/kucun/index">库存</a></li>
        <li><a href="/cangku/index">仓库</a></li>
        <li><a href="/gongyingshang/index">供应商</a></li>
        <li><a href="/kehu/index">客户</a></li>
        <li><a href="/yewuyuan/index">业务员</a></li>
        <li class="active"><a>系统管理</a></li>
    </ul>
</div>
<br/>
<div class="dataform">
    <form class="form-horizontal" method="post" action="/system/confirm">
        <div class="control-group">
            <label class="control-label" for="inputEmail">用户名</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="" name="adminname">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">原密码</label>
            <div class="controls">
                <input type="text" id="inputPassword" placeholder="" name="oldpwd">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">新密码</label>
            <div class="controls">
                <input type="text" id="inputNewPassword" placeholder="" name="newpwd">
            </div>
        </div>        
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn" id="confirmpwd">确认修改</button><span><font  id="inputnewpwd" size='1px' color='red' style='padding-left:40px;'></font></span>
                    <?php
                    $error = $this->input->get('error');
                    if (!empty($error)) {
                        echo "<font size='1px' color='red' style='padding-left:40px;'> 用户名或密码错误</font>";
                    }
                    ?>
            </div>
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#confirmpwd").click(function(){
                        var newpwd = $("#inputNewPassword").val();
                        if( newpwd == ''){
                            $("#inputnewpwd").text(' 新密码不能为空');
                        }
                    });
                });
            </script>
        </div>
    </form>
</div>