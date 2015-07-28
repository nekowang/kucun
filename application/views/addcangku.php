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
    <form action="/cangku/add" method="post">
        <fieldset>
            <legend><b>添加仓库</b></legend>
            <div class="control-group info">
                <div class="controls">
                    <span class="help-inline">仓库编号：</span>                    
                    <input type="text" id="inputInfo" name="Code">
                </div>
                <br/>
                <div class="controls">
                    <span class="help-inline">仓库名称：</span>                    
                    <input type="text" id="inputInfo" name="Name">
                    <span class="help-inline" style="padding-left: 50px">地址：</span>                    
                    <input type="text" id="inputInfo" name="Addr">                    
                </div>                
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;传真：</span>                    
                    <input type="text" id="inputInfo" name="Fax">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：</span>                    
                    <input type="text" id="inputInfo" name="Contact">                    
                    <span class="help-inline" style="padding-left: 50px">电话：</span>                    
                    <input type="text" id="inputInfo" name="Tel">
                    <span class="help-inline" style="padding-left: 50px">产地：</span>                    
                    <input type="text" id="inputInfo" name="Area"> 
                </div> 
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备注：</span>                    
                    <textarea rows="10" width="100%" name="Note"></textarea>
                </div>                 
            </div>                
            <br/>
            <div style="padding-left: 1120px">
                <button class="btn btn-primary btn-success" type="submit" id="querenadd">确认添加</button>
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
        <p>添加成功! 信息已经保存在仓库中</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">继续添加</button>
        <button class="btn btn-primary" id='fanhuicangku'>返回仓库页面</button>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function(){
           $("#fanhuicangku").click(function(){
                location.href = "/cangku/index";  
           });
        });
</script>