    <div>
        <ul class="nav nav-tabs">
            <li><a></a></li>
            <li><a href="/fahuo/index">发货</a></li>
            <li class="active"><a>库存</a></li>
            <li><a href="/cangku/index">仓库</a></li>
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
                    <th>产品编号</th><th>采购日期</th><th>合同编号</th><th>供应商</th>
                    <th>重量(吨)</th><th>产品单价</th><th>应收金额</th><th>产地</th><th>规格</th>
                    <th>材质</th><th>代权</th><th>仓库</th>
                    <th>是否付款</th><th>实收金额</th><th>操作</th><th>备注</th>
                </tr>
            </thead>
            <tbody>
              <?php
              if(!empty($products)){
                foreach ($products as $product ):
                    echo "<tr><td>$product->Code</td><td>$product->BuyingDate</td><td>$product->PactCode</td><td>$product->Supplier</td>";
                    echo "<td>$product->Weight</td><td>$product->Price</td><td>xxx</td><td>$product->Area</td><td>$product->Specification</td>";
                    echo "<td>$product->Texture</td><td>$product->LoanRight</td>";
                    echo "<td>$product->HouseId</td><td>";
                    echo $product->isPay ? "是" : "否";
                    echo "</td><td>$product->PayMoney</td>";
                    echo "<td><a href='/kucun/edit/".$product->Id."'>编辑</a>&nbsp;&nbsp;<a href='/kucun/del/".$product->Id."'>删除</a></td><td>$product->Note</td></tr>";
                endforeach;}
                ?>
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
        <button class="btn btn-primary  btn-small" type="button" id="addkucun">+ 添加库存</button>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
           $("#addkucun").click(function(){
                location.href = "/kucun/add";  
           });
        });
    </script>