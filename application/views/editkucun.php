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
    <form action="/kucun/edit" method="post">
        <input type="hidden" name="Id" value="<?php echo $product->Id; ?>" />
        <fieldset>
            <legend><b>编辑库存</b></legend>
            <div class="control-group info">
                <div class="controls">
                    <span class="help-inline">产品编号：</span>                    
                    <input type="text" id="inputInfo" name="Code" value="<?php echo $product->Code; ?>">
                </div>
                <br/>
                <div class="controls">
                    <span class="help-inline">采购日期：</span>                    
                    <input type="text" id="inputInfo" name="BuyingDate" value="<?php echo $product->BuyingDate; ?>">
                    <span class="help-inline kucunpadding">合同编号：</span>                    
                    <input type="text" id="inputInfo" name="PactCode" value="<?php echo $product->PactCode; ?>">                    
                    <span class="help-inline kucunpadding">供应商：</span>                    
                    <input type="text" id="inputInfo" name="Supplier" value="<?php echo $product->Supplier; ?>">   
                </div>                
                <br/>
                <div class="controls">
                    <span class="help-inline">产品名称：</span>                    
                    <input type="text" id="inputInfo" name="Name" value="<?php echo $product->Name; ?>">
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类别：</span>                    
                    <input type="text" id="inputInfo" name="Type" value="<?php echo $product->Type; ?>">                    
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;规格：</span>                    
                    <input type="text" id="inputInfo" name="Specification" value="<?php echo $product->Specification; ?>">
                    <span class="help-inline kucunpadding">产地：</span>                    
                    <input type="text" id="inputInfo" name="Area" value="<?php echo $product->Area; ?>"> 
                </div> 
                <br/>                
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;材质：</span>                    
                    <input type="text" id="inputInfo" name="Texture" value="<?php echo $product->Texture; ?>">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;品重量(吨)：</span>                    
                    <input type="text" id="inputInfo" name="Weight" value="<?php echo $product->Weight; ?>">                    
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;单价：</span>                    
                    <input type="text" id="inputInfo" name="Price" value="<?php echo $product->Price; ?>">
                    <span class="help-inline kucunpadding">单价：</span>                    
                    <input type="text" id="inputInfo" placeholder="这是假的"> 
                </div> 
                <br/>
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贷权：</span>                    
                    <input type="text" id="inputInfo" name="LoanRight" value="<?php echo $product->LoanRight; ?>">
                    <span class="help-inline kucunpadding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;仓库：</span>                    
                    <select name="HouseId">
                        <?php
                        foreach ($cangku as $key=>$val){
                            if($product->HouseId == $key){
                                echo "<option value='".$key."' selected='selected'>$val</option>";
                            }else{
                                echo "<option value='".$key."'>$val</option>";
                            }
                        }
                        ?>
                    </select>                  
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;是否付款：</span>                    
                    <select name="isPay">
                        <option value="0" <?php echo $product->isPay ? "" : "selected='selected'";?>>否</option>
                        <option value="1" <?php echo $product->isPay ? "selected='selected'" : "";?>>是</option>
                    </select>
                    <span class="help-inline">付款金额：</span>                    
                    <input type="text" id="inputInfo" name="PayMoney" value="<?php echo $product->PayMoney; ?>"> 
                </div> 
                <br/>                
                <div class="controls">
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备注：</span>                    
                    <textarea rows="10" width="100%" name="Note"><?php echo $product->Note; ?></textarea>
                </div>                 
            </div>                
            <br/>
            <div style="padding-left: 1120px">
                <button class="btn btn-primary btn-success" type="submit">完成</button>
            </div>
        </fieldset>
    </form>
</div>
