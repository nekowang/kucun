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
    <form action="/kucun/add" method="post">
        <fieldset>
            <legend><b>添加库存</b></legend>
            <div class="control-group info">
                <div class="controls">
                    <span class="help-inline">产品编号：</span>                    
                    <input type="text" id="inputInfo" name="Code">
                </div>
                <br/>
                <div class="controls">
                    <span class="help-inline">采购日期：</span>                    
                    <input type="text" id="inputInfo" name="BuyingDate" placeholder="例:1949-10-01">
                    <span class="help-inline kucunpadding">合同编号：</span>                    
                    <input type="text" id="inputInfo" name="PactCode">                    
                    <span class="help-inline kucunpadding">供应商：</span>                    
                    <input type="text" id="inputInfo" name="Supplier">   
                </div>                
                <br/>
                <div class="controls">
                    <span class="help-inline">产品名称：</span>                    
                    <input type="text" id="inputInfo" name="Name">
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类别：</span>                    
                    <input type="text" id="inputInfo" name="Type">                    
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;规格：</span>                    
                    <input type="text" id="inputInfo" name="Specification">
                    <span class="help-inline kucunpadding">产地：</span>                    
                    <input type="text" id="inputInfo" name="Area"> 
                </div> 
                <br/>                
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;材质：</span>                    
                    <input type="text" id="inputInfo" name="Texture">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;品重量(吨)：</span>                    
                    <input type="text" id="inputInfo" name="Weight">                    
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;单价：</span>                    
                    <input type="text" id="inputInfo" name="Price">
                    <span class="help-inline kucunpadding">单价：</span>                    
                    <input type="text" id="inputInfo" placeholder="这是假的"> 
                </div> 
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贷权：</span>                    
                    <input type="text" id="inputInfo" name="LoanRight">
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;仓库：</span>                    
                    <select name="HouseId">
                        <?php
                        foreach ($cangku as $key=>$val){
                            echo "<option value='".$key."'>$val</option>";
                        }
                        ?>
                    </select>                  
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;是否付款：</span>                    
                    <select name="isPay">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                    <span class="help-inline">付款金额：</span>                    
                    <input type="text" id="inputInfo" name="PayMoney"> 
                </div> 
                <br/>                
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备注：</span>                    
                    <textarea rows="10" width="100%" name="Note"></textarea>
                </div>                 
            </div>                
            <br/>
            <div style="padding-left: 1120px">
                <button class="btn btn-primary btn-success" type="submit">确认添加</button>
                <button class="btn" type="reset">重置</button>
            </div>
        </fieldset>
    </form>
</div>

<?php if (isset($addinfo) && !empty($addinfo)): ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#foo').modal({
                show: true
            });
        });
    </script>
<?php endif; ?>

<div id="foo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">库存管理系统 v1.0</button>
        <h3 id="myModalLabel"></h3>
    </div>
    <div class="modal-body">
        <p>添加成功! 信息已经保存在库存中</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">继续添加</button>
        <button class="btn btn-primary" id='fanhuicangku'>返回库存页面</button>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
           $("#fanhuicangku").click(function(){
                location.href = "/kucun/index";  
           });
        });
</script>