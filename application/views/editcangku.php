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
    <form action="/cangku/edit" method="post">
        <input type="hidden" name="Id" value="<?php echo $house->Id; ?>" />
        <fieldset>
            <legend><b>编辑仓库</b></legend>
            <div class="control-group info">
                <div class="controls">
                    <span class="help-inline">仓库编号：</span>                    
                    <input type="text" id="inputInfo" name="Code" value="<?php echo $house->Code; ?>" />
                </div>
                <br/>
                <div class="controls">
                    <span class="help-inline">仓库名称：</span>                    
                    <input type="text" id="inputInfo" name="Name" value="<?php echo $house->Name; ?>" />
                    <span class="help-inline" style="padding-left: 50px">地址：</span>                    
                    <input type="text" id="inputInfo" name="Addr" value="<?php echo $house->Addr; ?>" />
                </div>                
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;传真：</span>                    
                    <input type="text" id="inputInfo" name="Fax" value="<?php echo $house->Fax; ?>" />
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：</span>                    
                    <input type="text" id="inputInfo" name="Contact" value="<?php echo $house->Contact; ?>" />
                    <span class="help-inline" style="padding-left: 50px">电话：</span>                    
                    <input type="text" id="inputInfo" name="Tel" value="<?php echo $house->Tel; ?>" />
                    <span class="help-inline" style="padding-left: 50px">产地：</span>                    
                    <input type="text" id="inputInfo" name="Area" value="<?php echo $house->Area; ?>" />
                </div> 
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备注：</span>                    
                    <textarea rows="10" width="100%" name="Note"><?php echo $house->Note; ?></textarea>
                </div>                 
            </div>                
            <br/>
            <div style="padding-left: 1120px">
                <button class="btn btn-primary btn-success" type="submit">提交</button>
            </div>
        </fieldset>
    </form>
</div>
