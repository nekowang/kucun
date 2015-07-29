<div class="footer">
    <br/>
    <br/>
  <div style="display:block;">
    <form style="float:left" id="form1" action="/kucun/index" method="post"> 
            <fieldset style="float:left">
                <div style="float:left;padding-left: 20px">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon"><font size='2px'>起始时间 - 结束时间</font></span><input type="text" style="width: 200px" name="date" id="reservation"  /> 
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#reservation').val("<?php echo isset($date)?$date:"1949-01-01 - ".date('Y-m-d');?>");
                            $('#pay input').eq(<?php echo isset($pay) ? $pay : 0;?>).attr('checked', 'true');
                            $('#submitform1').click(function(){
                                $('#form1').submit();
                            });
                            $('#reservation').daterangepicker(null, function(start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
//                            $("#form1").change(function(){
//                                $('#form1').submit();
////                                $.ajax({
////                                    cache: true,
////                                    type: "POST",
////                                    url:ajaxCallUrl,
////                                    data:$('#form1').serialize(),// 你的formid
////                                    async: false,
////                                    error: function(request) {
////                                        alert("Connection error");
////                                    },
////                                    success: function(data) {
////                                        $("#commonLayout_appcreshi").parent().html(data);
////                                    }
////                                });
//                              });
//                              $('#applyDateBtn').click(function(){
//                                  $('#form1').submit();
//                              });
                           });      
                    </script>

                </div>   
                
                <div style="float:left;padding-left: 10px" id="pay">
                    <span style="vertical-align: bottom">付款：</span>
                    <label class="radio inline">
                        <input type="radio" name="pay" id="pay0" value="0">全部
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="pay" id="pay1" value="1"><font color='green'>已付清</font>
                    </label>                 
                    <label class="radio inline">
                        <input type="radio" name="pay" id="pay2" value="2"><font color='red'>未付清</font>
                    </label>
                </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            
                            $("#pay0").click(function(){
                                var payinfo = $("#pay0").attr("value");
                                $.post("/kucun/index/",
                                {
                                  pay: payinfo
                                });
                              });
                            $("#pay1").click(function(){
                                var payinfo = $("#pay1").attr("value");
                                $.post("/kucun/index/",
                                {
                                  pay: payinfo
                                });
                              }); 
                            $("#pay2").click(function(){
                                var payinfo = $("#pay2").attr("value");
                                $.post("/kucun/index/",
                                {
                                  pay: payinfo
                                });
                              });                          
                          });      
                    </script>
                <div style="float:left;padding-left: 10px;">                      
                    <span style="vertical-align: bottom">利润：</span>
                    <label class="radio inline">
                        <input type="radio" name="lirun" id="lirun0" value="0">全部
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="lirun" id="lirun1" value="1"><font color='green'>正</font>
                    </label>                 
                    <label class="radio inline">
                        <input type="radio" name="lirun" id="lirun2" value="2"><font color='red'>负</font>
                    </label>
                </div>
                <div style="float:left">
                    <label class="checkbox inline">
                        <button type="submit" class="btn btn-small btn-primary" style="float:left;height: 25px">筛选</button>&nbsp;
                        <button class="btn btn-small" type="button" id="cancelsx" style="height: 25px">取消筛选</button>
                    </label>
                </div>                    
            </fieldset>
        </form>
     <script type="text/javascript">
        $(document).ready(function(){
           $("#cancelsx").click(function(){
                location.href = "/kucun/index";  
           });
        });
    </script>
    <div style="float:left;padding-left: 30px;">
        <form  action="/kucun/index" method="post">
                <fieldset style="float:left">
                    <div style="float:left;padding-left: 10px">  
                        <select class="span2" name="title" style="height: 27px">
                            <option value="Code">产品编号</option>
                            <option value="BuyingDate">采购日期</option>
                        </select>
                    </div>
                    <div style="float:left;padding-left: 5px">
                            <div class="input-append" style="float:left">
                                <input type="text" class="span2" name='search' style="float:left;height: 17px"/>&nbsp;<span style="float:left;padding-left: 5px"> &nbsp;&nbsp;</span>&nbsp;
                                <button type="submit" class="btn btn-small btn-primary" style="float:left;height: 26px">搜索</button>
                            </div>
                    </div>
                </fieldset>
            </form>
    </div>
  </div>
        <form align="left">
            <fieldset>
                <div>
                    <label class="checkbox inline">
                         
                     <form class="form-horizontal" style="display:inline">
                        <fieldset style="display:inline">
                            <div class="control-group" style="display:inline">
                                <div class="controls" style="display:inline">
                                    <div class="input-prepend input-group" style="display:inline">
                                        <span class="add-on input-group-addon"><font size='2px'>按采购日期排序</font></span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form><span>&nbsp;&nbsp;&nbsp;</span>
                        <a href="/kucun/index/desc/1"><img src='/img/sec_down.gif'></img></a>
                        <span>&nbsp;</span>
                        <a href="/kucun/index/asc/1"><img src='/img/sec_up.gif'></img></a>
                    </label>
                </div>
            </fieldset>
        </form>

</body>
</html>
