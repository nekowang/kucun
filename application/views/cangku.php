    <div>
        <ul class="nav nav-tabs">
            <li><a></a></li>
            <li><a href="/fahuo/index">发货</a></li>
            <li><a href="/kucun/index">库存</a></li>
            <li class="active"><a>仓库</a></li>
            <li><a href="/gongyingshang/index">供应商</a></li>
            <li><a href="/kehu/index">客户</a></li>
            <li><a href="/yewuyuan/index">业务员</a></li>
            <li><a href="/system/index">系统管理</a></li>
        </ul>
    </div>

    <div class="dataform">
        <table class="table table-bordered table-striped table-condensed table-hover">
            <thead>
                <tr>
                    <th>仓库编号</th><th>仓库名称</th><th>地址</th><th>产地</th><th>传真</th><th>联系人</th>
                    <th>电话</th><th>操作</th><th>备注</th><th>优惠金额</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>                
                <tr>
                    <td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td><td>...</td>
                    <td>...</td><td>...</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pagination pagination-small">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">前一页</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">后一页</a></li>
            <li><a href="#">末页</a></li>
            <li><?php echo "<font size='2px'>&nbsp;&nbsp;共有<font color='red'> 650 </font>条数据</font>"; ?></li>
        </ul>
        <span class="buttontianjia"></span>
        <button class="btn btn-primary  btn-small" type="button" id="addcangku">+ 添加仓库</button>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
           $("#addcangku").click(function(){
                location.href = "/cangku/addcangku";  
           });
        });
    </script>