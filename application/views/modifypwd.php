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
<div style="padding-left: 100px">
    <label>密码修改成功</label>
    <br/>
<p>
  <button class="btn btn-primary" type="button" id="fanhuiindex">返回首页</button>
  <button class="btn btn-primary" type="button" id="fanhuipwd">返回修改密码</button>  
</p>
</div>
</div>
    <script type="text/javascript">
        $(document).ready(function(){
           $("#fanhuiindex").click(function(){
                location.href = "/kucun/index";  
           });
           $("#fanhuipwd").click(function(){
                location.href = "/system/index";  
           });           
        });
    </script>